
function swal(icone, mensagem, tempo){
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
          popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: tempo,
        timerProgressBar: true
      });


      Toast.fire({
        icon: icone,
        title: mensagem
      })
}