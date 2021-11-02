if (location.hash === "#from-lgk" || sessionStorage.getItem("from-lgk")) {
    document.body.classList.add("from-lgk")
}

sessionStorage.setItem("from-lgk", "true")