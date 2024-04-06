import("https://code.jquery.com/jquery-3.7.1.js")
const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", this.window.scrollY > 0);
});
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
};
window.onscroll = () => {
menu.classList.remove('bx-x');
navbar.classList.remove('open');
};

function likePost(item, user) {
    console.log("Item : " + item + "\nUser :" + user);
    $.ajax({
        url: "review.php",
        type: "POST",
        data: {
            "review": "like",
            "item": item,
            "user": user
        },
        success: (resp) => {
            console.log(resp);
            $("#like"+item).load(location.href + " #like"+item);
        }
    });
}

function unlikePost(item, user) {
    $.ajax({
        url: "review.php",
        type: "POST",
        data: {
            "review": "unlike",
            "item": item,
            "user": user
        },
        success: (resp) => {
            console.log(resp);
            let likeBtn = document.createElement("button");
            likeBtn.setAttribute("class", "likeBtn");
            likeBtn.setAttribute("id", "like"+item);
            $("#like"+item).load(location.href + " #like"+item);
        }
    });
}
// document.title = document.title+ " | Photo Gllery";