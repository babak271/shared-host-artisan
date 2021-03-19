<script>
    function fetchResponse(event) {
        event.preventDefault();
        let url = event.target.getAttribute('href');
        fetch(url)
            .then(function (response) {
                return response.json();
            })
            .then(function (data) {
                let alert_el = document.querySelector('#alert-message');
                let alert_container = document.querySelector('#alert-container');
                alert_el.innerHTML = data.message;
                alert_container.classList.remove('d-none');
                setTimeout(function () {
                    alert_container.classList.add('d-none');
                    alert_el.innerHTML = '';
                }, 5000);
            });
    }

    const anchors = document.getElementsByTagName('a');
    Array.prototype.forEach.call(anchors, function (element, index, array) {
        let href = element.getAttribute('href');
        element.addEventListener('click', fetchResponse);
    });

</script>
