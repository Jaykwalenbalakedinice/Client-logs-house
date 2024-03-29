<style>
    body,
    html {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
    }

    body {
        background-size: cover;
        background-attachment: fixed;
        /* or scroll, depending on desired effect */
        height: auto;
        min-height: 100%;
        width: 100vw;
        margin: 0;
        /* In case there's default margin causing issues */
        background: #76b852;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #cc0000, #1b3cd1);
        background: -moz-linear-gradient(to top, #cc0000, #1b3cd1);
        background: -o-linear-gradient(to top, #cc0000, #1b3cd1);
        background: linear-gradient(to top, #cc0000, #1b3cd1);
        font-family: "Roboto", sans-serif;
    }

    img {
        width: 50%;
        height: 120px;
    }

    .region, .province, .municipality, .barangay, .citizenType, .gender, .birthDate, #virtualIdNumber, .form-control, .form-select, .officeConcerned, .purpose{
        color: rgb(219, 218, 218);
        border-radius: 0;
    }


    .form-control::placeholder {
        color: rgb(219, 218, 218);
    }

    select::placeholder {
        color: rgb(219, 218, 218);
    }

    .js-states::placeholder {
        color: rgb(219, 218, 218);
    }


    .select2-placeholder {
        color: rgb(219, 218, 218);
    }



    .js-states {
        width: 100%;
    }

    /* Data Privacy Notice */
    .privacyNotice {
        margin-left: 10px;
        font-size: 1em;
        color: #fffdfd;
        letter-spacing: 1px;
        font-weight: 300;
    }

    .privacyNotice a {
        color: #fff;
        -webkit-transition: .5s all;
        -moz-transition: .5s all;
        transition: .5s all;
        font-weight: bolder;
        text-decoration: none;
        color: white;
        font-size: large;
    }

    /* Checkbox */
    .wthree-text label {
        font-size: 0.9em;
        color: #fff;
        font-weight: 200;
        cursor: pointer;
        position: relative;
        margin-top: 20px;
    }

    input.checkbox {
        background: #c26f7d;
        cursor: pointer;
        width: 1.2em;
        height: 1.2em;
    }

    input.checkbox:before {
        content: "";
        position: absolute;
        width: 1.2em;
        height: 1.2em;
        background: inherit;
        cursor: pointer;
    }

    input.checkbox:after {
        content: "";
        position: absolute;
        top: 0px;
        left: 0;
        z-index: 1;
        width: 1.2em;
        height: 1.2em;
        border: 1px solid #fff;
        -webkit-transition: .4s ease-in-out;
        -moz-transition: .4s ease-in-out;
        -o-transition: .4s ease-in-out;
        transition: .4s ease-in-out;
    }

    input.checkbox:checked:after {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        height: .5rem;
        border-color: #fff;
        border-top-color: transparent;
        border-right-color: transparent;
    }

    .anim input.checkbox:checked:after {
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
        height: .5rem;
        border-color: transparent;
        border-right-color: transparent;
        animation: .4s rippling .4s ease;
        animation-fill-mode: forwards;
    }

    @keyframes rippling {
        50% {
            border-left-color: #fff;
        }

        100% {
            border-bottom-color: #fff;
            border-left-color: #fff;
        }
    }

    /*-- //checkbox --*/

    label {
        color: whitesmoke;
    }

    h4 {
        /* font-size: 3em; */
        text-align: center;
        color: #fff;
        font-weight: 200px;
        text-transform: capitalize;
        letter-spacing: 4px;
        font-family: "Roboto", sans-serif;
    }

    .form-control,
    .form-select{
        background-color: rgba(0, 0, 0, 0.18);
        border-color: rgb(255, 255, 255);
        border-width: 1px;
    }

    .select2-select{
        background-color: rgba(0, 0, 0, 0.18);
    }

    strong {
        margin-left: 10px;
    }

    /* @media (max-width: 1024px) and (max-height: 1280px) {
        body {
            justify-content: center;
            align-items: center;
        }
    } */


    .alert p {
        font-size: 18px;
        font-style: italic;
        color: #fff;
        padding-top: 10px;
        color: black;
        margin-left: 20px;
    }

    .alert a {
        font-weight: bold;
        text-decoration: none;
        color: skyblue;
    }

    .alert a:hover {
        font-weight: bold;
        text-decoration: underline;
        color: #380036;
    }

    .button-container {
        margin: 15px 0;
    }

    .btn {
        width: 100%;
        margin-right: 10px;
        display: block;
        font-size: 20px;
        color: #fff;
        border: none;
        border-radius: 5px;
        background-image: linear-gradient(to right, #aa076b, #61045f);
        cursor: pointer;
    }

    .btn:hover {
        background-image: linear-gradient(to right, #61045f, #aa076b);
    }

    .is-invalid2 {
        border-color: #dc3545;
    }

    /* Application submitted succesfully */
    .overlay {
        position: fixed;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }

    .alert {
        opacity: 1;
        transition: opacity 1s ease-out;
    }

    .alert.fade-out {
        opacity: 0;
    }

    .alert .icon {
        position: fixed;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        font-size: 40px;
        /* Adjust the size of the icon */
    }


    /*bubbles*/
    .colorlib-bubbles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .colorlib-bubbles li {
        position: absolute;
        list-style: none;
        display: block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.15);
        bottom: -160px;
        -webkit-animation: square 20s infinite;
        -moz-animation: square 250s infinite;
        -o-animation: square 20s infinite;
        -ms-animation: square 20s infinite;
        animation: square 20s infinite;
        -webkit-transition-timing-function: linear;
        -moz-transition-timing-function: linear;
        -o-transition-timing-function: linear;
        -ms-transition-timing-function: linear;
        transition-timing-function: linear;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -o-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
    }

    .colorlib-bubbles li:nth-child(1) {
        left: 10%;
    }

    .colorlib-bubbles li:nth-child(2) {
        left: 20%;
        width: 80px;
        height: 80px;
        -webkit-animation-delay: 2s;
        -moz-animation-delay: 2s;
        -o-animation-delay: 2s;
        -ms-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 17s;
        -moz-animation-duration: 17s;
        -o-animation-duration: 17s;
        animation-duration: 17s;
    }

    .colorlib-bubbles li:nth-child(3) {
        left: 25%;
        -webkit-animation-delay: 4s;
        -moz-animation-delay: 4s;
        -o-animation-delay: 4s;
        -ms-animation-delay: 4s;
        animation-delay: 4s;
    }

    .colorlib-bubbles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        -webkit-animation-duration: 22s;
        -moz-animation-duration: 22s;
        -o-animation-duration: 22s;
        -ms-animation-duration: 22s;
        animation-duration: 22s;
        background-color: rgba(255, 255, 255, 0.25);
    }

    .colorlib-bubbles li:nth-child(5) {
        left: 70%;
    }

    .colorlib-bubbles li:nth-child(6) {
        left: 80%;
        width: 120px;
        height: 120px;
        -webkit-animation-delay: 3s;
        -moz-animation-delay: 3s;
        -o-animation-delay: 3s;
        -ms-animation-delay: 3s;
        animation-delay: 3s;
        background-color: rgba(255, 255, 255, 0.2);
    }

    .colorlib-bubbles li:nth-child(7) {
        left: 32%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 7s;
        -moz-animation-delay: 7s;
        -o-animation-delay: 7s;
        -ms-animation-delay: 7s;
        animation-delay: 7s;
    }

    .colorlib-bubbles li:nth-child(8) {
        left: 55%;
        width: 20px;
        height: 20px;
        -webkit-animation-delay: 15s;
        -moz-animation-delay: 15s;
        animation-delay: 15s;
        -webkit-animation-duration: 40s;
        -moz-animation-duration: 40s;
        animation-duration: 40s;
    }

    .colorlib-bubbles li:nth-child(9) {
        left: 25%;
        width: 10px;
        height: 10px;
        -webkit-animation-delay: 2s;
        animation-delay: 2s;
        -webkit-animation-duration: 40s;
        animation-duration: 40s;
        background-color: rgba(255, 255, 255, 0.3);
    }

    .colorlib-bubbles li:nth-child(10) {
        left: 90%;
        width: 160px;
        height: 160px;
        -webkit-animation-delay: 11s;
        animation-delay: 11s;
    }

    @-webkit-keyframes square {
        0% {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -o-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
            -moz-transform: translateY(-700px) rotate(600deg);
            -o-transform: translateY(-700px) rotate(600deg);
            -ms-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
        }
    }

    @keyframes square {
        0% {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -o-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            -webkit-transform: translateY(-700px) rotate(600deg);
            -moz-transform: translateY(-700px) rotate(600deg);
            -o-transform: translateY(-700px) rotate(600deg);
            -ms-transform: translateY(-700px) rotate(600deg);
            transform: translateY(-700px) rotate(600deg);
        }
    }
</style>
