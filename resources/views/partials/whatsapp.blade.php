<div class="whatsapp-container">

    <span class="whatsapp-tooltip">
        Need Shipping Assistance?
    </span>

    <a href="https://wa.me/2349087995953?text=Hello%20APMDC,%20I%20need%20assistance%20with%20your%20shipping%20and%20logistics%20services."
       class="whatsapp-float"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Chat with APMDC on WhatsApp">

        <i class="fab fa-whatsapp"></i>

    </a>

</div>

<style>

/* ==========================================
   WhatsApp Floating Button
========================================== */

.whatsapp-container{
    position: fixed;
    left: 25px;
    bottom: 25px;
    z-index: 999999;
}

.whatsapp-float{
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #25D366;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 34px;
    text-decoration: none;
    box-shadow: 0 8px 25px rgba(0,0,0,.25);
    transition: all .3s ease;
    animation: whatsappPulse 2.5s infinite;
}

.whatsapp-float:hover{
    background: #20ba5a;
    color: #fff;
    transform: scale(1.08);
}


/* ==========================================
   Tooltip
========================================== */

.whatsapp-tooltip{
    position: absolute;
    bottom: 75px;
    left: 0;

    background: #1f2937;
    color: #fff;
    padding: 10px 16px;
    border-radius: 8px;

    font-size: 14px;
    font-weight: 500;
    white-space: nowrap;

    opacity: 0;
    visibility: hidden;

    transform: translateY(10px);
    transition: all .3s ease;

    box-shadow: 0 6px 18px rgba(0,0,0,.25);
}

/* Show tooltip */

.whatsapp-container:hover .whatsapp-tooltip{
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

/* Arrow */

.whatsapp-tooltip::after{
    content:"";
    position:absolute;
    left:24px;
    bottom:-6px;

    border-left:6px solid transparent;
    border-right:6px solid transparent;
    border-top:6px solid #1f2937;
}


/* ==========================================
   Pulse Animation
========================================== */

@keyframes whatsappPulse{

    0%{
        box-shadow:0 0 0 0 rgba(37,211,102,.55);
    }

    70%{
        box-shadow:0 0 0 18px rgba(37,211,102,0);
    }

    100%{
        box-shadow:0 0 0 0 rgba(37,211,102,0);
    }

}


/* ==========================================
   Mobile
========================================== */

@media (max-width:768px){

    .whatsapp-container{
        left:20px;
        bottom:20px;
    }

    .whatsapp-float{
        width:55px;
        height:55px;
        font-size:30px;
    }

    /* Hide tooltip on touch devices */

    .whatsapp-tooltip{
        display:none;
    }

}

</style>