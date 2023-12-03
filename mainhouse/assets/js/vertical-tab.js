const allIndicator = document.querySelectorAll('.indicator li');
const allContent = document.querySelectorAll('.content li');

allIndicator.forEach(item=> {
  item.addEventListener('click', function () {
    const content = document.querySelector(this.dataset.target);

    allIndicator.forEach(i=> {
      i.classList.remove('active_tab');
    })

    allContent.forEach(i=> {
      i.classList.remove('active_tab');
    })

    content.classList.add('active_tab');
    this.classList.add('active_tab');
  })
})