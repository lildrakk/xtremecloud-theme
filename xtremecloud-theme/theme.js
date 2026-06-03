function applyTheme() {
  const primary = document.getElementById("primaryColor").value;
  const secondary = document.getElementById("secondaryColor").value;
  const accent = document.getElementById("accentColor").value;
  const font = document.getElementById("fontSelector").value;

  document.body.style.background = secondary;
  document.body.style.color = "white";

  document.querySelector("h1").style.color = primary;

  document.getElementById("googleFont").href =
    "https://fonts.googleapis.com/css2?family=" + font.replace(" ", "+") + ":wght@300;400;600&display=swap";

  document.body.style.fontFamily = font + ", sans-serif";

  alert("Tema aplicado con éxito (versión PRO)");
}

document.getElementById("applyBtn").onclick = applyTheme;
