$("#formPendaftaran").validate({
    rules:{
        nama:{
        },
        tempat_lahir:{
        },
        tgl_lahir:{
            date: true,
        },
        umur:{
            min: 5,
            max: 19
        },
        jenis_kelamin:{
        },
        alamat:{
        },
        asal_sekolah:{
        },
        nisn:{
            minlength: 13,
            maxlength: 13
        },
        nilai_bindo:{
            min: 0,
            max: 100
        },
        nilai_binggris:{
            min: 0,
            max: 100
        },
        nilai_ipa:{
            min: 0,
            max: 100
        },
        nilai_mtk:{
            min: 0,
            max: 100
        }
    },
    messages: {
        nama:{
            required: "Nama harus diisi."
        },
        tempat_lahir:{
            required: "Tempat lahir harus diisi."
        },
        tgl_lahir:{
            required: "Tanggal lahir harus diisi."
        },
        umur:{
            min: "Umur pendaftar minimal 5 tahun.",
            max: "Umur pendaftar maksimal 19 tahun"
        },
        jenis_kelamin:{
            required: "Jenis kelamin harus diisi."
        },
        alamat:{
            required: "Alamat harus diisi."
        },
        nisn:{
            minlength: "NISN hanya berisi 13 angka",
            maxlength: "NISN hanya berisi 13 angka"
        },
        asal_sekolah:{
            required: "Asal sekolah harus diisi."
        },
        nilai_bindo:{
            min: "Nilai minimal 0",
            max: "Nilai maksimal 100"
        },
        nilai_binggris:{
            min: "Nilai minimal 0",
            max: "Nilai maksimal 100"
        },
        nilai_ipa:{
            min: "Nilai minimal 0",
            max: "Nilai maksimal 100"
        },
        nilai_mtk:{
            min: "Nilai minimal 0",
            max: "Nilai maksimal 100"
        }
    },

    submitHandler: function(form) {
      form.submit();
    }
   });

   $("#formRegist").validate({
    rules:{
        email:{
            email:true
        },
        password:{
            minlength: 8
        },
        confirm_pass:{
            minlength: 8
        }
    },
    messages: {
        email:{
            required: "Email harus diisi.",
            email: "Email harus diisi dengan email."
        },
        password:{
            required: "Password harus diisi.",
            minlength: "Password minimal 8 karakter."
        },
        confirm_pass:{
            required: "Konfirmasi password harus diisi.",
            minlength: "Konfirmasi password minimal 8 karakter"
        }
    },

    submitHandler: function(form) {
      form.submit();
    }
   });