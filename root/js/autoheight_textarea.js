function auto_grow(element) {
    element.style.height = "45px";
    if (element.scrollHeight > 50) {
        element.style.height = 5 + "px";
        element.style.height = (element.scrollHeight + 10) + "px";
    }
}