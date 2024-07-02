document.querySelector('#form').addEventListener('submit', (event) => { 
    const phoneInput = document.querySelector('#number'); 
    const phoneError = document.querySelector('#phoneError'); 

    phoneError.style.display = phoneInput.value.length !== 16 ? 'block' : 'none'; 
    if (phoneError.style.display === 'block') event.preventDefault(); 
}); 

document.querySelector('#number').onkeydown = (e) => inputNumber(e);

const inputNumber = (e) => {
    const key = e.key;
    const number = e.target;
    const v = number.value;

    if (!key.match(/[0-9]|Backspace/)) e.preventDefault();
    if (key === 'Backspace') return;
    if (v.length >= 16) e.preventDefault();

    if (v.length < 3) number.value = '+7(';
    else if (v.length === 6) number.value += ')';
    else if (v.length === 10 || v.length === 13) number.value += '-';
}
