let page = 1;
document.getElementById('$page').innerHTML = '1';

document.getElementById('up').addEventListener('click', () => {
    page++;
    document.getElementById('$page').innerHTML = page;
    console.log(page);
});
document.getElementById('down').addEventListener('click', () => {
    page--;
    document.getElementById('$page').innerHTML= page;
    console.log(page);
});