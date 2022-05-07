

const showTop = () => {
    document.querySelector('.bttmbtn').classList.remove('active')
    document.querySelector('.topbtn').classList.add('active')
    document.querySelector('#top').classList.add('d-block')
    document.querySelector('#top').classList.remove('d-none')
    document.querySelector('#bottom').classList.remove('d-block')
    document.querySelector('#bottom').classList.add('d-none')
}

const showBottom = () => {
    document.querySelector('.bttmbtn').classList.add('active')
    document.querySelector('.topbtn').classList.remove('active')
    document.querySelector('#bottom').classList.add('d-block')
    document.querySelector('#bottom').classList.remove('d-none')
    document.querySelector('#top').classList.remove('d-block')
    document.querySelector('#top').classList.add('d-none')
}