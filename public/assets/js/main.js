// const navigation = document.querySelector(".navigation");
// const dropdown = document.querySelector(".dropdown");
// const logout = document.querySelector(".logout-btn");
// const logout2 = document.querySelector(".logout-btn2");

// navigation.addEventListener("click", () => {
//     dropdown.classList.toggle("hidden");
// });

// let alerts = document.querySelector(".alert");

$(".navigation").click(function () {
    $(".dropdown").fadeToggle(200);
});
