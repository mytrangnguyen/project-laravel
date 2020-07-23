// $(document).ready(function () {
//   var fa = document.getElementById('error');
//   fa.style.display = 'none';
//   $('#ajaxRegister').click(function (e) {
//     e.preventDefault();
//     $.ajaxSetup({
//       headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//       }
//     });
//     $.ajax({
//       url: "{{ url('/addNguoidung') }}",
//       method: 'post',
//       data: {
//         username: $('#username').val(),
//         email: $('#email').val(),
//         address: $('#address').val(),
//         phone: $('#phone').val(),
//         password: $('#password').val(),
//         repassword: $('#repassword').val()

//       },
//       success: function (result) {
//         window.location.href = "/";
//         console.log("thành công", result);
//       },
//       error: function (data) {
//         if (data) {
//           $("#close-error").click(function () {
//             $("#error").hide();
//           });
//           var errors = JSON.parse(data.responseText);
//           fa.style.display = 'block';
//           console.log("lỗi nha m", errors);
//           $.each(errors.errors, function (key, value) {
//             console.log("value", value);
//             listError.push(value[0]);
//             var p = document.createElement('p');
//             fa.appendChild(p);
//             for (let index = 0; index < listError.length; index++) {
//               p.innerHTML = listError[index];
//             }
//           });
//           console.log(listError[0]);
//         }

//       }
//     });
//   });
// }); ""