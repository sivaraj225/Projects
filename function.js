document.addEventListener('DOMContentLoaded', function () {
            var profileButton = document.querySelector('.profile_button');
            var dropdownMenu = document.getElementById('profileDropdown');

            profileButton.addEventListener('click', function (event) {
                event.stopPropagation();
                dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
            });

            window.addEventListener('click', function () {
                if (dropdownMenu.style.display === 'block') {
                    dropdownMenu.style.display = 'none';
                }
            });

            dropdownMenu.addEventListener('click', function (event) {
                event.stopPropagation();
            });
        });


        