let buttons = document.querySelectorAll('.buy');

buttons.forEach((elem) => {
    elem.addEventListener('click', () => {
        let id = elem.getAttribute('data-id');
        (async () => {
            const response = await fetch('/Api/AddBasket/', {
                method: 'POST',
                headers: new Headers({
                    'Content-Type': 'application/json'
                }),
                body: JSON.stringify({
                    id: id
                }),
            });
            const answer = await response.json();
            document.getElementById('count').innerText = answer.count;

        })();
    })
});