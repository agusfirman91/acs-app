</div>
</body>
<style>
    .clock {
        width: 100px;
        margin: 0 auto;
        padding: 5px;
        border: 1px solid #333;
    }

    #Date {
        font-family: 'BebasNeueRegular', Arial, Helvetica, sans-serif;
        text-align: center;
        font-size: 1.2em;
    }

    ul {
        margin: 0 auto;
        padding: 0px;
        list-style: none;
        text-align: center;
    }

    ul li {
        color: red;
        display: inline;
        font-size: 3.2em;
        text-align: center;
        font-family: digital;
    }

    @font-face {
        font-family: digital;
        src: url('../assets/fonts/digital-7.woff');

    }

    #point {
        position: relative;
        -moz-animation: mymove 1s ease infinite;
        -webkit-animation: mymove 1s ease infinite;
        padding-left: 10px;
        padding-right: 10px;
    }

    @-webkit-keyframes mymove {
        0% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }

        50% {
            opacity: 0;
            text-shadow: none;
        }

        100% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }
    }


    @-moz-keyframes mymove {
        0% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }

        50% {
            opacity: 0;
            text-shadow: none;
        }

        100% {
            opacity: 1.0;
            text-shadow: 0 0 20px #00c6ff;
        }
    }
</style>


<style>
    body {
        background: url('assets/images/background.jpg') no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: 50% 50%;
        padding-top: 70px;
        font-family: 'Open Sans', sans-serif;
        outline: 0;
    }

    .portfolio-item {
        margin-bottom: 25px;
    }

    footer {
        margin: 50px 0;
    }

    .burlywood {
        background: #DEB887;
    }

    .dark-grey {
        background: #A9A9A9;
    }

    i {
        margin-left: 20px;
    }

    .modal-login {
        width: 450px;
    }

    .modal-login .modal-content {
        padding: 20px;
        border-radius: 5px;
        border: none;
    }

    .modal-login .modal-header {
        border-bottom: none;
        position: relative;
        justify-content: center;
    }

    .modal-login .close {
        position: absolute;
        top: -10px;
        right: -10px;
    }

    .modal-login h4 {
        color: #636363;
        text-align: center;
        font-size: 26px;
        margin-top: 0;
    }

    .modal-login .modal-content {
        color: #999;
        border-radius: 1px;
        margin-bottom: 15px;
        background: #fff;
        border: 1px solid #f3f3f3;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 25px;
    }

    .modal-login .form-group {
        margin-bottom: 20px;
    }

    .modal-login label {
        font-weight: normal;
        font-size: 13px;
    }

    .modal-login .form-control {
        min-height: 38px;
        padding-left: 5px;
        box-shadow: none !important;
        border-width: 0 0 1px 0;
        border-radius: 0;
    }

    .modal-login .form-control:focus {
        border-color: #ccc;
    }

    .modal-login .input-group-addon {
        max-width: 60px;
        text-align: center;
        background: none;
        border-width: 0 0 1px 0;
        padding-left: 5px;
        border-radius: 0;
    }

    .modal-login .btn {
        font-size: 16px;
        font-weight: bold;
        background: #19aa8d;
        border-radius: 3px;
        border: none;
        min-width: 140px;
        outline: none !important;
    }

    .modal-login .btn:hover,
    .modal-login .btn:focus {
        background: #179b81;
    }

    .modal-login .hint-text {
        text-align: center;
        padding-top: 5px;
        font-size: 13px;
    }

    .modal-login .modal-footer {
        color: #999;
        border-color: #dee4e7;
        text-align: center;
        margin: 0 -25px -25px;
        font-size: 13px;
        justify-content: center;
    }

    .modal-login a {
        color: #fff;
        text-decoration: underline;
    }

    .modal-login a:hover {
        text-decoration: none;
    }

    .modal-login a {
        color: #19aa8d;
        text-decoration: none;
    }

    .modal-login a:hover {
        text-decoration: underline;
    }

    .modal-login .fa {
        font-size: 21px;
    }
</style>
<script src="<?= base_url('assets/js/app.js') ?>"></script>

</html>