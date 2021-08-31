$(document).ready(function () {
    jQuery.validator.setDefaults({
        errorPlacement: function (error, element) {
            if (element.attr("name") === "Availability") {
                $("#uploadFile").addClass("error");
                error.insertAfter(".check-2");
            } else {
                error.insertAfter(element);
            }
        }
    });
    jQuery.validator.addMethod("emailstudent", function (value, element) {
        return this.optional(element) || /^.+@(student\.umn\.ac\.id|lecturer\.umn\.ac\.id|umn\.ac\.id)$/.test(value);
    }, "Email harus menggunakan email student atau email dari UMN"
    );
    jQuery.validator.addMethod("regexeco", function (value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
    }, "Nama tidak boleh mengandung angka ataupun simbol"
    );
    // Unique identifier
    jQuery.validator.addMethod('unique_studentid', function (value, element) {
        let check = true;
        for (let i = 0; i < student_id_list.length; ++i) {
            if (student_id_list[i].toLowerCase() === value.toLowerCase().replace(/^0+/, '')) {
                check = false;
            }
        }
        return check;
    }, "NIM kamu sudah terdaftar"
    );
    jQuery.validator.addMethod('unique_email', function (value, element) {
        let check = true;
        for (let i = 0; i < email_list.length; ++i) {
            if (email_list[i].toLowerCase() === value.toLowerCase()) {
                check = false;
            }
        }
        return check;
    }, "Email kamu sudah terdaftar"
    );
    jQuery.validator.addMethod('unique_instagram', function (value, element) {
        let check = true;
        for (let i = 0; i < instagram_list.length; ++i) {
            if (instagram_list[i].toLowerCase() === value.toLowerCase()) {
                check = false;
            }
        }
        return check;
    }, "Akun instagram kamu sudah terdaftar"
    );
    jQuery.validator.addMethod('unique_line', function (value, element) {
        let check = true;
        for (let i = 0; i < line_list.length; ++i) {
            if (line_list[i].toLowerCase() === value.toLowerCase()) {
                check = false;
            }
        }
        return check;
    }, "Akun line kamu sudah terdaftar"
    );
    jQuery.validator.addMethod('unique_phone', function (value, element) {
        let check = true;
        for (let i = 0; i < phone_list.length; ++i) {
            if (phone_list[i].toLowerCase() === value.toLowerCase()) {
                check = false;
            }
        }
        return check;
    }, "Nomor telepon kamu sudah terdaftar"
    );
    $('#form-register').validate({
        rules: {
            Full_name: {
                required: true,
                regexeco: true
            },
            Student_id: {
                required: true,
                digits: true,
                unique_studentid: true,
                minlength: 11,
                maxlength: 11
            },
            Email: {
                required: true,
                emailstudent: true,
                unique_email: true
            },
            Email_external: {
                required: true,
                unique_email: true
            },
            Major: {
                required: true
            },
            Generation: {
                required: true
            },
            Institusion: {
                required: true
            },
            Instagram_account: {
                required: true,
                unique_instagram: true
            },
            Line_id: {
                required: true,
                unique_line: true
            },
            Phone_number: {
                required: true,
                minlength: 11,
                maxlength: 13,
                digits: true,
                unique_phone: true
            },
            Password: {
                required: true,
                minlength: 8,
                maxlength: 25
            },
            Password_confirmation: {
                required: true,
                minlength: 8,
                maxlength: 25,
                equalTo: "#Password"
            },
            Availability: {
                required: true
            }
        },
        messages: {
            Full_name: {
                required: 'Kamu perlu mengisi nama kamu',
                regexeco: 'Nama tidak boleh mengandung angka ataupun simbol'
            },
            Student_id: {
                required: 'Kamu perlu mengisi NIM kamu',
                digits: 'NIM harus berupa angka',
                minlength: 'NIM yang kamu masukkan tidak valid',
                maxlength: 'NIM yang kamu masukkan tidak valid'
            },
            Email: {
                required: 'Kamu perlu mengisi email kamu',
                emailstudent: 'Email harus menggunakan email student'
            },
            Email_external: {
                required: 'Kamu perlu mengisi email kamu'
            },
            Major: {
                required: 'Kamu perlu mengisi jurusan kamu'
            },
            Generation: {
                required: 'Kamu perlu mengisi angkatan kamu'
            },
            Institution: {
                required: 'Kamu perlu mengisi institusi kamu'
            },
            Instagram_account: {
                required: 'Kamu perlu mengisi nama akun instagram kamu'
            },
            Line_id: {
                required: 'Kamu perlu mengisi id line kamu'
            },
            Phone_number: {
                required: 'Kamu perlu mengisi nomor telepon kamu',
                minlength: 'Nomor telepon terlalu pendek',
                maxlength: 'Nomor telepon terlalu panjang',
                digits: 'Nomor telepon harus berupa angka'
            },
            Password: {
                required: 'Kamu perlu mengisi password kamu',
                minlength: 'Password minimal terdiri dari 8 karakter',
                maxlength: 'Password maximal terdiri dari 25 karakter'
            },
            Password_confirmation: {
                required: 'Kamu perlu mengisi password kamu',
                minlength: 'Password minimal terdiri dari 8 karakter',
                maxlength: 'Password maximal terdiri dari 25 karakter',
                equalTo: 'Password tidak sama'
            },
            Availability: {
                required: 'Kamu perlu menyetujui ketentuan yang berlaku'
            }
        }
    });
});