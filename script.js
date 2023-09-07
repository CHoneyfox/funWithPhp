cat = document.getElementById("cat");
dog = document.getElementById("dog");

cat.addEventListener("click", () => {
    location.replace("kill.php?victim=dog")
});

dog.addEventListener("click", () => {
    location.replace("kill.php?victim=cat")
});