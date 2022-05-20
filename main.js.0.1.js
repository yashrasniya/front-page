document.getElementById("assig").addEventListener("click", () => {
    document.getElementById("showOp").value = document.getElementById("assig").innerText;
});

document.getElementById("pract").addEventListener("click", () => {
    document.getElementById("showOp").value = document.getElementById("pract").innerText;
});

document.getElementById("subOp").addEventListener("click", () => {
    document.getElementById("sub").style.display = "flex";
});

document.getElementById("toc").addEventListener("click", () => {
    document.getElementById("subOp").value = document.getElementById("toc").value;
    document.getElementById("sub").style.display = "";
});

document.getElementById("coa").addEventListener("click", () => {
    document.getElementById("subOp").value = document.getElementById("coa").value;
    document.getElementById("sub").style.display = "";
});

document.getElementById("dbms").addEventListener("click", () => {
    document.getElementById("subOp").value = document.getElementById("dbms").value;
    document.getElementById("sub").style.display = "";
});

document.getElementById("facOp").addEventListener("click", () => {
    document.getElementById("fac").style.display = "flex";
});

document.getElementById("ftoc").addEventListener("click", () => {
    document.getElementById("facOp").value = document.getElementById("ftoc").value;
    document.getElementById("fac").style.display = "";
});

document.getElementById("fcoa").addEventListener("click", () => {
    document.getElementById("facOp").value = document.getElementById("fcoa").value;
    document.getElementById("fac").style.display = "";
});

document.getElementById("fdbms").addEventListener("click", () => {
    document.getElementById("facOp").value = document.getElementById("fdbms").value;
    document.getElementById("fac").style.display = "";
});