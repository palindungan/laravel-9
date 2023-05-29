<style>
    .js-fh5co-nav-toggle.fh5co-nav-toggle {
        display: none;
    }
</style>

<style>
    .tooltip {
        position: relative;
        display: inline-block;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #4fa03f;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #4fa03f transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>

<style>
    .swipe_up {
        width: 30px;
        height: 30px;
        border: 1px solid rgb(255, 255, 255);
        border-radius: 50%;
        background: rgb(255, 255, 255);
        position: relative;
        animation: mymove 2s ease-out forwards;
        animation-iteration-count: 1.5;

        /* Safari and Chrome */
        -webkit-animation: mymove 2s;
        -webkit-animation-iteration-count: infinite;
    }

    @keyframes mymove {
        from {
            top: 500px;
            opacity: 1;
        }
        to {
            top: -150px;
            opacity: 0;
        }
    }

    /* Safari and Chrome */
    @-webkit-keyframes mymove {
        from {
            top: 500px;
            opacity: 1;
        }
        to {
            top: -150px;
            opacity: 0;
        }
    }
</style>

<style>
    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0px;
    }
</style>

<style>
    .simply-countdown > .simply-section {
        display: inline-block;
        width: 100px;
        height: 100px;
        background: rgb(8 84 10 / 80%);
        margin: 0 4px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        position: relative;
        animation: pulse 1s ease infinite;
    }

    .fh5co-heading h2 {
        font-size: 60px;
        margin-bottom: 10px;
        line-height: 1.5;
        font-weight: bold;
        color: rgb(8 84 10 / 80%);
        font-family: "Sacramento", Arial, serif;
    }

    .fh5co-heading p {
        font-size: 18px;
        line-height: 1.5;
        color: rgb(8 84 10 / 80%);
    }

    .couple-half h3 {
        font-family: "Sacramento", Arial, serif;
        color: rgb(8 84 10 / 80%);
        font-size: 30px;
    }

    body {
        font-family: "Work Sans", Arial, sans-serif;
        font-weight: 400;
        font-size: 16px;
        line-height: 1.7;
        color: rgb(8 84 10 / 80%);
        background: #fff;
    }

    .btn-custom {
        background: rgb(8 84 10 / 80%);
        color: #fff;
        border: 0px;
    }

    .btn-primary {
        background: rgb(8 84 10 / 80%);
        color: #fff;
        border: 0px;
    }

    #fh5co-started .btn {
        height: 54px;
        border: none !important;
        background: rgb(8 84 10 / 80%);
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        padding-left: 50px;
        padding-right: 50px;
    }
</style>