import Swal from 'sweetalert2';

const toastMixin = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,

    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
});

export default function showToast (icon, title) {
    toastMixin.fire({
        icon: icon,
        title: title
    });
};