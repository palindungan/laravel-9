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
        background-color: #555;
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
        border-color: #555 transparent transparent transparent;
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