document.addEventListener("DOMContentLoaded", () => {
  //#region ROOM DETAILS MODAL

  const modal = document.getElementById("roomModal");
  const modalBody = document.getElementById("roomModalBody");

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

      const html = await response.text();

      modalBody.innerHTML = html;
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
    initRoomSlider(document.getElementById("roomModalBody"));
  });

  const items = Array.from(
    document.querySelectorAll("#gallery-pages .gallery-item"),
  );

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

  //#endregion

  //#region GALLERY SECTION
  const prevButton = document.getElementById("gallery-prev");
  const nextButton = document.getElementById("gallery-next");

  if (!items.length || !prevButton || !nextButton) {
    return;
  }

  // 576px altı = telefon
  const mobileQuery = window.matchMedia("(max-width: 575.98px)");
  const getPerPage = () => (mobileQuery.matches ? 1 : 6);

  let currentPage = 0;

  function showPage(page) {
    const perPage = getPerPage();
    const totalPages = Math.ceil(items.length / perPage);

    currentPage = Math.max(0, Math.min(page, totalPages - 1));

    const start = currentPage * perPage;
    const end = start + perPage;

    items.forEach((element, index) => {
      element.classList.toggle("d-none", index < start || index >= end);
    });

    prevButton.classList.toggle("is-hidden", currentPage === 0);
    nextButton.classList.toggle("is-hidden", currentPage === totalPages - 1);
  }

  prevButton.addEventListener("click", (event) => {
    event.preventDefault();
    showPage(currentPage - 1);
  });

  nextButton.addEventListener("click", (event) => {
    event.preventDefault();
    showPage(currentPage + 1);
  });

  // Ekran boyutu değişince (telefon <-> masaüstü, döndürme) başa dön
  mobileQuery.addEventListener("change", () => showPage(0));

  showPage(0);

  //#endregion
});
