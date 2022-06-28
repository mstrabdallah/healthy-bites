function openMenu() {
    var element = document.getElementById("menu");
    var element2 = document.getElementsByTagName('body')[0]

    if (element.classList.contains('active')) {
        element.classList.remove('active');
        element2.classList.remove('active')
    } else {
        element.classList.add('active')
        element2.classList.add('active')
    }
    // element.classList.add("active");

    // document.getElementsByClassName("menu").addcslashes = "block";
}
