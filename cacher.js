function cacher() {
    let type = document.getElementById("type").value;

    if (type == "brunch") {
        document.getElementById("dates-brunch").classList.remove("cacher");
        document.getElementById("dates-souper").classList.add("cacher");
    }

    else {
        document.getElementById("dates-brunch").classList.add("cacher");
        document.getElementById("dates-souper").classList.remove("cacher");
    }
}