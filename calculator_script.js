function masukan(num) {
    document.form.textarea.value = document.form.textarea.value + num;
}
function symbolsamadengan() {
    var jumlah = document.form.textarea.value;
    document.form.textarea.value = eval(jumlah);
}
function bersihkan() {
    document.form.textarea.value = "";
}
function backspace() {
    var jumlah = document.form.textarea.value;
    document.form.textarea.value = jumlah.substring(0, jumlah.length - 1);
}