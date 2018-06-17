document.addEventListener('DOMContentLoaded', () => {
    let _total = document.querySelector('[data-total')

    if(parseFloat(_total.getAttribute('data-total')) > 0){
        _total.classList.add('text-success')
    } else {
        _total.classList.add('text-danger')
    }
})