import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});

document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('defaultModalButton').click();
});

document.addEventListener('DOMContentLoaded', function() {
    // Ambil modal dan tombol close
    const modal = document.getElementById("editModal");
    const closeBtn = document.querySelector(".close");

    // Ambil tombol edit dan proses data
    const editButtons = document.querySelectorAll(".btn-edit");

    editButtons.forEach(button => {
        button.addEventListener("click", function() {
            const postId = this.getAttribute("data-id");
            const postTitle = this.getAttribute("data-title");
            const postContent = this.getAttribute("data-content");

            // Isi form dengan data yang dipilih
            document.getElementById("editTitle").value = postTitle;
            document.getElementById("editContent").value = postContent;

            // Update action form dengan URL untuk update
            const formAction = `/posts/${postId}`;
            document.getElementById("editForm").action = formAction;

            // Tampilkan modal
            modal.style.display = "block";
        });
    });

    // Tutup modal
    closeBtn.onclick = function() {
        modal.style.display = "none";
    };

    // Tutup modal jika area luar modal diklik
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    // Tangani pengiriman form dengan AJAX
    const form = document.getElementById("editForm");
    form.addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = new FormData(form);
        const actionUrl = form.action;

        // Kirim request menggunakan Fetch API (atau Anda bisa pakai jQuery.ajax)
        fetch(actionUrl, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',  // Agar Laravel mengenali request ini sebagai AJAX
                'X-CSRF-TOKEN': formData.get('_token')  // CSRF token untuk keamanan
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Tutup modal setelah berhasil
            modal.style.display = "none";

            // Perbarui data di halaman
            const updatedRow = document.querySelector(`[data-id='${data.id}']`).parentElement.parentElement;
            updatedRow.querySelector(".post-title").textContent = data.title;
            updatedRow.querySelector(".post-content").textContent = data.content;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});

document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('defaultModalButton').click();
});
