const faq = document.querySelectorAll("#faq__trigger");

faq.forEach((el) => {
  el.addEventListener("click", function () {
    const parentElement = this.closest(".faq__accordion");
    parentElement.classList.toggle("active__accordion");

    const message = parentElement.querySelector("#faq__message");

    if (parentElement.classList.contains("active__accordion")) {
      const dynamicHeight = message.scrollHeight;
      message.style.height = `${dynamicHeight}px`;
    } else {
      message.style.height = 0;
    }
  });
});
