document.addEventListener("DOMContentLoaded", () => {
  //#region SLIDERS (Yerel Rehber + Galeri)

  if (window.jQuery && jQuery.fn.slick) {
    const $ = window.jQuery;

    // İki slider'ın ortak ayarları
    const baseOptions = {
      infinite: false,
      swipeToSlide: true,
      edgeFriction: 0.35,
      prevArrow:
        '<button type="button" class="nav-arrow nav-arrow--prev" aria-label="Önceki"></button>',
      nextArrow:
        '<button type="button" class="nav-arrow nav-arrow--next" aria-label="Sonraki"></button>',
    };

    // Baş/son durumunu is-start / is-end sınıflarıyla işaretler (mobil peek için)
    function bindEdge($el) {
      function update(slick, index) {
        $el
          .toggleClass("is-start", index <= 0)
          .toggleClass("is-end", index >= slick.slideCount - 1);
      }
      $el.on("init reInit", function (e, slick) {
        update(slick, slick.currentSlide);
      });
      $el.on("beforeChange", function (e, slick, current, next) {
        update(slick, next);
      });
    }

    // Yerel Rehber
    const $guideSlider = $(".local-guide-slider");
    if ($guideSlider.length) {
      bindEdge($guideSlider);
      $guideSlider.slick({
        ...baseOptions,
        slidesToShow: 4,
        responsive: [
          { breakpoint: 1200, settings: { slidesToShow: 3 } },
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 576, settings: { slidesToShow: 1, arrows: false } },
        ],
      });
    }

    // Galeri
    const $gallerySlider = $(".gallery-slider");
    if ($gallerySlider.length) {
      bindEdge($gallerySlider);
      $gallerySlider.slick({
        ...baseOptions,
        slidesToShow: 3,
        responsive: [
          { breakpoint: 992, settings: { slidesToShow: 2 } },
          { breakpoint: 576, settings: { slidesToShow: 1, arrows: false } },
        ],
      });
    }
  }

  //#endregion

  //#region ROOM DETAILS MODAL

  const modal = document.getElementById("roomModal");
  const modalBody = document.getElementById("roomModalBody");

  if (modal && modalBody) {
    let requestController = null;

    modal.addEventListener("show.bs.modal", async function (event) {
      const button = event.relatedTarget;
      const roomKey = button?.dataset.room;

      if (!roomKey) {
        modalBody.innerHTML =
          '<div class="alert alert-warning">Oda seçilemedi.</div>';
        return;
      }

      // Önceki istek tamamlanmadıysa iptal et.
      if (requestController) {
        requestController.abort();
      }

      requestController = new AbortController();

      modalBody.innerHTML = `
        <div class="text-center py-5">
          <div class="spinner-border" role="status">
            <span class="visually-hidden">Yükleniyor...</span>
          </div>
          <p class="mt-3">Oda detayları yükleniyor...</p>
        </div>
      `;

      try {
        const response = await fetch(
          `inc/room-details/main.php?room=${encodeURIComponent(roomKey)}`,
          { signal: requestController.signal },
        );

        if (!response.ok) {
          throw new Error("Oda detayları yüklenemedi.");
        }

        modalBody.innerHTML = await response.text();
      } catch (error) {
        if (error.name === "AbortError") {
          return;
        }

        modalBody.innerHTML = `
          <div class="alert alert-danger">
            Oda detayları yüklenirken bir hata oluştu.
            Lütfen tekrar deneyin.
          </div>
        `;

        console.error(error);
      }
    });

    modal.addEventListener("hidden.bs.modal", function () {
      if (requestController) {
        requestController.abort();
        requestController = null;
      }

      modalBody.innerHTML = "";
    });

    modal.addEventListener("shown.bs.modal", function () {
      initRoomSlider(modalBody);
    });

    function initRoomSlider(modalBody) {
      if (!window.jQuery || !jQuery.fn.bxSlider) return;

      const $slider = jQuery(modalBody).find(".product-details .bxslider");

      if (!$slider.length || $slider.data("bxSlider")) return;

      $slider.bxSlider({
        mode: "fade",
        auto: false,
        speed: 700,
        pagerCustom: jQuery(modalBody).find(
          ".product-details .slider-pager .thumb-box",
        ),
        adaptiveHeight: true,
        controls: false,
        onSliderLoad: function () {
          $slider.addClass("bxslider-ready");
        },
      });
    }
  }

  //#endregion
});
