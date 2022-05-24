<style>
  body { padding-top:20px; }
.container {
    max-width: 1200px;
}

/* Font Size For Button Text */
.glyphsize {
	font-size:48px !important;
}
.panel-footer {
	line-height:inherit !important;
}
/* Colours Used for Glyphicons and some text */
.black { color: #000;}
.red { color: #F00; }
.dgreen { color: #060; }
.green { color: #0F0; }
.blue { color: #00F; }
.mblue { color: #09F; }
.yellow { color: #FF0;}
.purple { color: #609;}
.lilac { color: #C6F; }
.orange { color: #F90; }
.choc { color: #330;}

/* Button Colours */
.btn-dblue { 
  color: #111; 
  background-color: #e1dfdf; 
  border-color: #e1dfdf; 
} 
 
.btn-dblue:hover, 
.btn-dblue:focus, 
.btn-dblue:active, 
.btn-dblue.active, 
.open .dropdown-toggle.btn-dblue { 
  color: #ffffff; 
  background-color: #18148C; 
  border-color: #000A7A; 
} 
 
.btn-dblue:active, 
.btn-dblue.active, 
.open .dropdown-toggle.btn-dblue { 
  background-image: none; 
} 
 
.btn-dblue.disabled, 
.btn-dblue[disabled], 
fieldset[disabled] .btn-dblue, 
.btn-dblue.disabled:hover, 
.btn-dblue[disabled]:hover, 
fieldset[disabled] .btn-dblue:hover, 
.btn-dblue.disabled:focus, 
.btn-dblue[disabled]:focus, 
fieldset[disabled] .btn-dblue:focus, 
.btn-dblue.disabled:active, 
.btn-dblue[disabled]:active, 
fieldset[disabled] .btn-dblue:active, 
.btn-dblue.disabled.active, 
.btn-dblue[disabled].active, 
fieldset[disabled] .btn-dblue.active { 
  background-color: #1B23BD; 
  border-color: #000A7A; 
} 
 
.btn-dblue .badge { 
  color: #1B23BD; 
  background-color: #ffffff; 
}
.btn-dred { 
  color: #ffffff; 
  background-color: #B50D2E; 
  border-color: #69021F; 
} 
 
.btn-dred:hover, 
.btn-dred:focus, 
.btn-dred:active, 
.btn-dred.active, 
.open .dropdown-toggle.btn-dred { 
  color: #ffffff; 
  background-color: #7A2435; 
  border-color: #69021F; 
} 
 
.btn-dred:active, 
.btn-dred.active, 
.open .dropdown-toggle.btn-dred { 
  background-image: none; 
} 
 
.btn-dred.disabled, 
.btn-dred[disabled], 
fieldset[disabled] .btn-dred, 
.btn-dred.disabled:hover, 
.btn-dred[disabled]:hover, 
fieldset[disabled] .btn-dred:hover, 
.btn-dred.disabled:focus, 
.btn-dred[disabled]:focus, 
fieldset[disabled] .btn-dred:focus, 
.btn-dred.disabled:active, 
.btn-dred[disabled]:active, 
fieldset[disabled] .btn-dred:active, 
.btn-dred.disabled.active, 
.btn-dred[disabled].active, 
fieldset[disabled] .btn-dred.active { 
  background-color: #B50D2E; 
  border-color: #69021F; 
} 
 
.btn-dred .badge { 
  color: #B50D2E; 
  background-color: #ffffff; 
}
.btn-dgreen { 
  color: #ffffff; 
  background-color: #0DB548; 
  border-color: #026926; 
} 
 
.btn-dgreen:hover, 
.btn-dgreen:focus, 
.btn-dgreen:active, 
.btn-dgreen.active, 
.open .dropdown-toggle.btn-dgreen { 
  color: #ffffff; 
  background-color: #287A24; 
  border-color: #026926; 
} 
 
.btn-dgreen:active, 
.btn-dgreen.active, 
.open .dropdown-toggle.btn-dgreen { 
  background-image: none; 
} 
 
.btn-dgreen.disabled, 
.btn-dgreen[disabled], 
fieldset[disabled] .btn-dgreen, 
.btn-dgreen.disabled:hover, 
.btn-dgreen[disabled]:hover, 
fieldset[disabled] .btn-dgreen:hover, 
.btn-dgreen.disabled:focus, 
.btn-dgreen[disabled]:focus, 
fieldset[disabled] .btn-dgreen:focus, 
.btn-dgreen.disabled:active, 
.btn-dgreen[disabled]:active, 
fieldset[disabled] .btn-dgreen:active, 
.btn-dgreen.disabled.active, 
.btn-dgreen[disabled].active, 
fieldset[disabled] .btn-dgreen.active { 
  background-color: #0DB548; 
  border-color: #026926; 
} 
 
.btn-dgreen .badge { 
  color: #0DB548; 
  background-color: #ffffff; 
}
.btn-mblue { 
  color: #ffffff; 
  background-color: #0DA1B5; 
  border-color: #025D69; 
} 
 
.btn-mblue:hover, 
.btn-mblue:focus, 
.btn-mblue:active, 
.btn-mblue.active, 
.open .dropdown-toggle.btn-mblue { 
  color: #6FF; 
  background-color: #247A7A; 
  border-color: #025D69; 
} 
 
.btn-mblue:active, 
.btn-mblue.active, 
.open .dropdown-toggle.btn-mblue { 
  background-image: none; 
} 
 
.btn-mblue.disabled, 
.btn-mblue[disabled], 
fieldset[disabled] .btn-mblue, 
.btn-mblue.disabled:hover, 
.btn-mblue[disabled]:hover, 
fieldset[disabled] .btn-mblue:hover, 
.btn-mblue.disabled:focus, 
.btn-mblue[disabled]:focus, 
fieldset[disabled] .btn-mblue:focus, 
.btn-mblue.disabled:active, 
.btn-mblue[disabled]:active, 
fieldset[disabled] .btn-mblue:active, 
.btn-mblue.disabled.active, 
.btn-mblue[disabled].active, 
fieldset[disabled] .btn-mblue.active { 
  background-color: #0DA1B5; 
  border-color: #025D69; 
} 
 
.btn-mblue .badge { 
  color: #0DA1B5; 
  background-color: #ffffff; 
}
.btn-burnt { 
  color: #ffffff; 
  background-color: #B5690D; 
  border-color: #694302; 
} 
 
.btn-burnt:hover, 
.btn-burnt:focus, 
.btn-burnt:active, 
.btn-burnt.active, 
.open .dropdown-toggle.btn-burnt { 
  color: #fffccc; 
  background-color: #7A5024; 
  border-color: #694302; 
} 
 
.btn-burnt:active, 
.btn-burnt.active, 
.open .dropdown-toggle.btn-burnt { 
  background-image: none; 
} 
 
.btn-burnt.disabled, 
.btn-burnt[disabled], 
fieldset[disabled] .btn-burnt, 
.btn-burnt.disabled:hover, 
.btn-burnt[disabled]:hover, 
fieldset[disabled] .btn-burnt:hover, 
.btn-burnt.disabled:focus, 
.btn-burnt[disabled]:focus, 
fieldset[disabled] .btn-burnt:focus, 
.btn-burnt.disabled:active, 
.btn-burnt[disabled]:active, 
fieldset[disabled] .btn-burnt:active, 
.btn-burnt.disabled.active, 
.btn-burnt[disabled].active, 
fieldset[disabled] .btn-burnt.active { 
  background-color: #B5690D; 
  border-color: #694302; 
} 
 
.btn-burnt .badge { 
  color: #B5690D; 
  background-color: #ffffff; 
}
.btn-grey { 
  color: #ffffff; 
  background-color: #A6A1AD; 
  border-color: #605D70; 
} 
 
.btn-grey:hover, 
.btn-grey:focus, 
.btn-grey:active, 
.btn-grey.active, 
.open .dropdown-toggle.btn-grey { 
  color: #ffffff; 
  background-color: #413C47; 
  border-color: #605D70; 
} 
 
.btn-grey:active, 
.btn-grey.active, 
.open .dropdown-toggle.btn-grey { 
  background-image: none; 
} 
 
.btn-grey.disabled, 
.btn-grey[disabled], 
fieldset[disabled] .btn-grey, 
.btn-grey.disabled:hover, 
.btn-grey[disabled]:hover, 
fieldset[disabled] .btn-grey:hover, 
.btn-grey.disabled:focus, 
.btn-grey[disabled]:focus, 
fieldset[disabled] .btn-grey:focus, 
.btn-grey.disabled:active, 
.btn-grey[disabled]:active, 
fieldset[disabled] .btn-grey:active, 
.btn-grey.disabled.active, 
.btn-grey[disabled].active, 
fieldset[disabled] .btn-grey.active { 
  background-color: #A6A1AD; 
  border-color: #605D70; 
} 
 
.btn-grey .badge { 
  color: #A6A1AD; 
  background-color: #ffffff; 
}
.btn-mred { 
  color: #FFFFFF; 
  background-color: #E01919; 
  border-color: #BD4242; 
} 
 
.btn-mred:hover, 
.btn-mred:focus, 
.btn-mred:active, 
.btn-mred.active, 
.open .dropdown-toggle.btn-mred { 
  color: #FFFFFF; 
  background-color: #871111; 
  border-color: #BD4242; 
} 
 
.btn-mred:active, 
.btn-mred.active, 
.open .dropdown-toggle.btn-mred { 
  background-image: none; 
} 
 
.btn-mred.disabled, 
.btn-mred[disabled], 
fieldset[disabled] .btn-mred, 
.btn-mred.disabled:hover, 
.btn-mred[disabled]:hover, 
fieldset[disabled] .btn-mred:hover, 
.btn-mred.disabled:focus, 
.btn-mred[disabled]:focus, 
fieldset[disabled] .btn-mred:focus, 
.btn-mred.disabled:active, 
.btn-mred[disabled]:active, 
fieldset[disabled] .btn-mred:active, 
.btn-mred.disabled.active, 
.btn-mred[disabled].active, 
fieldset[disabled] .btn-mred.active { 
  background-color: #E01919; 
  border-color: #BD4242; 
} 
 
.btn-mred .badge { 
  color: #E01919; 
  background-color: #FFFFFF; 
}
.btn-lblue { 
  color: #FFFFFF; 
  background-color: #19D9E0; 
  border-color: #3E8A94; 
} 
 
.btn-lblue:hover, 
.btn-lblue:focus, 
.btn-lblue:active, 
.btn-lblue.active, 
.open .dropdown-toggle.btn-lblue { 
  color: #FFFFFF; 
  background-color: #0F6773; 
  border-color: #3E8A94; 
} 
 
.btn-lblue:active, 
.btn-lblue.active, 
.open .dropdown-toggle.btn-lblue { 
  background-image: none; 
} 
 
.btn-lblue.disabled, 
.btn-lblue[disabled], 
fieldset[disabled] .btn-lblue, 
.btn-lblue.disabled:hover, 
.btn-lblue[disabled]:hover, 
fieldset[disabled] .btn-lblue:hover, 
.btn-lblue.disabled:focus, 
.btn-lblue[disabled]:focus, 
fieldset[disabled] .btn-lblue:focus, 
.btn-lblue.disabled:active, 
.btn-lblue[disabled]:active, 
fieldset[disabled] .btn-lblue:active, 
.btn-lblue.disabled.active, 
.btn-lblue[disabled].active, 
fieldset[disabled] .btn-lblue.active { 
  background-color: #19D9E0; 
  border-color: #3E8A94; 
} 
 
.btn-lblue .badge { 
  color: #19D9E0; 
  background-color: #FFFFFF; 
}
.btn-orange { 
  color: #FFFFFF; 
  background-color: #FABC00; 
  border-color: #B39852; 
} 
 
.btn-orange:hover, 
.btn-orange:focus, 
.btn-orange:active, 
.btn-orange.active, 
.open .dropdown-toggle.btn-orange { 
  color: #FFFFFF; 
  background-color: #73570F; 
  border-color: #B39852; 
} 
 
.btn-orange:active, 
.btn-orange.active, 
.open .dropdown-toggle.btn-orange { 
  background-image: none; 
} 
 
.btn-orange.disabled, 
.btn-orange[disabled], 
fieldset[disabled] .btn-orange, 
.btn-orange.disabled:hover, 
.btn-orange[disabled]:hover, 
fieldset[disabled] .btn-orange:hover, 
.btn-orange.disabled:focus, 
.btn-orange[disabled]:focus, 
fieldset[disabled] .btn-orange:focus, 
.btn-orange.disabled:active, 
.btn-orange[disabled]:active, 
fieldset[disabled] .btn-orange:active, 
.btn-orange.disabled.active, 
.btn-orange[disabled].active, 
fieldset[disabled] .btn-orange.active { 
  background-color: #FABC00; 
  border-color: #B39852; 
} 
 
.btn-orange .badge { 
  color: #FABC00; 
  background-color: #FFFFFF; 
}
.btn-yellow { 
  color: #FFFFFF; 
  background-color: #FAEE00; 
  border-color: #D7DE11; 
} 
 
.btn-yellow:hover, 
.btn-yellow:focus, 
.btn-yellow:active, 
.btn-yellow.active, 
.open .dropdown-toggle.btn-yellow { 
  color: #FFFFFF; 
  background-color: #858F00; 
  border-color: #D7DE11; 
} 
 
.btn-yellow:active, 
.btn-yellow.active, 
.open .dropdown-toggle.btn-yellow { 
  background-image: none; 
} 
 
.btn-yellow.disabled, 
.btn-yellow[disabled], 
fieldset[disabled] .btn-yellow, 
.btn-yellow.disabled:hover, 
.btn-yellow[disabled]:hover, 
fieldset[disabled] .btn-yellow:hover, 
.btn-yellow.disabled:focus, 
.btn-yellow[disabled]:focus, 
fieldset[disabled] .btn-yellow:focus, 
.btn-yellow.disabled:active, 
.btn-yellow[disabled]:active, 
fieldset[disabled] .btn-yellow:active, 
.btn-yellow.disabled.active, 
.btn-yellow[disabled].active, 
fieldset[disabled] .btn-yellow.active { 
  background-color: #FAEE00; 
  border-color: #D7DE11; 
} 
 
.btn-yellow .badge { 
  color: #FAEE00; 
  background-color: #FFFFFF; 
}
.btn-purple { 
  color: #ffffff; 
  background-color: #7319E8; 
  border-color: #4430AB; 
} 
 
.btn-purple:hover, 
.btn-purple:focus, 
.btn-purple:active, 
.btn-purple.active, 
.open .dropdown-toggle.btn-purple { 
  color: #ffffff; 
  background-color: #552299; 
  border-color: #4430AB; 
} 
 
.btn-purple:active, 
.btn-purple.active, 
.open .dropdown-toggle.btn-purple { 
  background-image: none; 
} 
 
.btn-purple.disabled, 
.btn-purple[disabled], 
fieldset[disabled] .btn-purple, 
.btn-purple.disabled:hover, 
.btn-purple[disabled]:hover, 
fieldset[disabled] .btn-purple:hover, 
.btn-purple.disabled:focus, 
.btn-purple[disabled]:focus, 
fieldset[disabled] .btn-purple:focus, 
.btn-purple.disabled:active, 
.btn-purple[disabled]:active, 
fieldset[disabled] .btn-purple:active, 
.btn-purple.disabled.active, 
.btn-purple[disabled].active, 
fieldset[disabled] .btn-purple.active { 
  background-color: #7319E8; 
  border-color: #4430AB; 
} 
 
.btn-purple .badge { 
  color: #7319E8; 
  background-color: #ffffff; 
}
.btn-dpurple { 
  color: #ffffff; 
  background-color: #430B8C; 
  border-color: #1D0D6B; 
} 
 
.btn-dpurple:hover, 
.btn-dpurple:focus, 
.btn-dpurple:active, 
.btn-dpurple.active, 
.open .dropdown-toggle.btn-dpurple { 
  color: #ffffff; 
  background-color: #3C1173; 
  border-color: #1D0D6B; 
} 
 
.btn-dpurple:active, 
.btn-dpurple.active, 
.open .dropdown-toggle.btn-dpurple { 
  background-image: none; 
} 
 
.btn-dpurple.disabled, 
.btn-dpurple[disabled], 
fieldset[disabled] .btn-dpurple, 
.btn-dpurple.disabled:hover, 
.btn-dpurple[disabled]:hover, 
fieldset[disabled] .btn-dpurple:hover, 
.btn-dpurple.disabled:focus, 
.btn-dpurple[disabled]:focus, 
fieldset[disabled] .btn-dpurple:focus, 
.btn-dpurple.disabled:active, 
.btn-dpurple[disabled]:active, 
fieldset[disabled] .btn-dpurple:active, 
.btn-dpurple.disabled.active, 
.btn-dpurple[disabled].active, 
fieldset[disabled] .btn-dpurple.active { 
  background-color: #430B8C; 
  border-color: #1D0D6B; 
} 
 
.btn-dpurple .badge { 
  color: #430B8C; 
  background-color: #ffffff; 
}
.btn-lilac { 
  color: #ffffff; 
  background-color: #B07EF2; 
  border-color: #7B6CC7; 
} 
 
.btn-lilac:hover, 
.btn-lilac:focus, 
.btn-lilac:active, 
.btn-lilac.active, 
.open .dropdown-toggle.btn-lilac { 
  color: #ffffff; 
  background-color: #6D4B99; 
  border-color: #7B6CC7; 
} 
 
.btn-lilac:active, 
.btn-lilac.active, 
.open .dropdown-toggle.btn-lilac { 
  background-image: none; 
} 
 
.btn-lilac.disabled, 
.btn-lilac[disabled], 
fieldset[disabled] .btn-lilac, 
.btn-lilac.disabled:hover, 
.btn-lilac[disabled]:hover, 
fieldset[disabled] .btn-lilac:hover, 
.btn-lilac.disabled:focus, 
.btn-lilac[disabled]:focus, 
fieldset[disabled] .btn-lilac:focus, 
.btn-lilac.disabled:active, 
.btn-lilac[disabled]:active, 
fieldset[disabled] .btn-lilac:active, 
.btn-lilac.disabled.active, 
.btn-lilac[disabled].active, 
fieldset[disabled] .btn-lilac.active { 
  background-color: #B07EF2; 
  border-color: #7B6CC7; 
} 
 
.btn-lilac .badge { 
  color: #B07EF2; 
  background-color: #ffffff; 
}
.btn-lgreen { 
  color: #ffffff; 
  background-color: #84F27E; 
  border-color: #6CC779; 
} 
 
.btn-lgreen:hover, 
.btn-lgreen:focus, 
.btn-lgreen:active, 
.btn-lgreen.active, 
.open .dropdown-toggle.btn-lgreen { 
  color: #ffffff; 
  background-color: #4B9954; 
  border-color: #6CC779; 
} 
 
.btn-lgreen:active, 
.btn-lgreen.active, 
.open .dropdown-toggle.btn-lgreen { 
  background-image: none; 
} 
 
.btn-lgreen.disabled, 
.btn-lgreen[disabled], 
fieldset[disabled] .btn-lgreen, 
.btn-lgreen.disabled:hover, 
.btn-lgreen[disabled]:hover, 
fieldset[disabled] .btn-lgreen:hover, 
.btn-lgreen.disabled:focus, 
.btn-lgreen[disabled]:focus, 
fieldset[disabled] .btn-lgreen:focus, 
.btn-lgreen.disabled:active, 
.btn-lgreen[disabled]:active, 
fieldset[disabled] .btn-lgreen:active, 
.btn-lgreen.disabled.active, 
.btn-lgreen[disabled].active, 
fieldset[disabled] .btn-lgreen.active { 
  background-color: #84F27E; 
  border-color: #6CC779; 
} 
 
.btn-lgreen .badge { 
  color: #84F27E; 
  background-color: #ffffff; 
}
.btn-lime { 
  color: #ffffff; 
  background-color: #4BFC41; 
  border-color: #6CC779; 
} 
 
.btn-lime:hover, 
.btn-lime:focus, 
.btn-lime:active, 
.btn-lime.active, 
.open .dropdown-toggle.btn-lime { 
  color: #ffffff; 
  background-color: #4B9954; 
  border-color: #6CC779; 
} 
 
.btn-lime:active, 
.btn-lime.active, 
.open .dropdown-toggle.btn-lime { 
  background-image: none; 
} 
 
.btn-lime.disabled, 
.btn-lime[disabled], 
fieldset[disabled] .btn-lime, 
.btn-lime.disabled:hover, 
.btn-lime[disabled]:hover, 
fieldset[disabled] .btn-lime:hover, 
.btn-lime.disabled:focus, 
.btn-lime[disabled]:focus, 
fieldset[disabled] .btn-lime:focus, 
.btn-lime.disabled:active, 
.btn-lime[disabled]:active, 
fieldset[disabled] .btn-lime:active, 
.btn-lime.disabled.active, 
.btn-lime[disabled].active, 
fieldset[disabled] .btn-lime.active { 
  background-color: #4BFC41; 
  border-color: #6CC779; 
} 
 
.btn-lime .badge { 
  color: #4BFC41; 
  background-color: #ffffff; 
}
.btn-green { 
  color: #ffffff; 
  background-color: #02C702; 
  border-color: #0B9C21; 
} 
 
.btn-green:hover, 
.btn-green:focus, 
.btn-green:active, 
.btn-green.active, 
.open .dropdown-toggle.btn-green { 
  color: #ffffff; 
  background-color: #106E1B; 
  border-color: #0B9C21; 
} 
 
.btn-green:active, 
.btn-green.active, 
.open .dropdown-toggle.btn-green { 
  background-image: none; 
} 
 
.btn-green.disabled, 
.btn-green[disabled], 
fieldset[disabled] .btn-green, 
.btn-green.disabled:hover, 
.btn-green[disabled]:hover, 
fieldset[disabled] .btn-green:hover, 
.btn-green.disabled:focus, 
.btn-green[disabled]:focus, 
fieldset[disabled] .btn-green:focus, 
.btn-green.disabled:active, 
.btn-green[disabled]:active, 
fieldset[disabled] .btn-green:active, 
.btn-green.disabled.active, 
.btn-green[disabled].active, 
fieldset[disabled] .btn-green.active { 
  background-color: #02C702; 
  border-color: #0B9C21; 
} 
 
.btn-green .badge { 
  color: #02C702; 
  background-color: #ffffff; 
}
.btn-mokka { 
  color: #ffffff; 
  background-color: #B38744; 
  border-color: #856820; 
} 
 
.btn-mokka:hover, 
.btn-mokka:focus, 
.btn-mokka:active, 
.btn-mokka.active, 
.open .dropdown-toggle.btn-mokka { 
  color: #ffffff; 
  background-color: #6B641A; 
  border-color: #856820; 
} 
 
.btn-mokka:active, 
.btn-mokka.active, 
.open .dropdown-toggle.btn-mokka { 
  background-image: none; 
} 
 
.btn-mokka.disabled, 
.btn-mokka[disabled], 
fieldset[disabled] .btn-mokka, 
.btn-mokka.disabled:hover, 
.btn-mokka[disabled]:hover, 
fieldset[disabled] .btn-mokka:hover, 
.btn-mokka.disabled:focus, 
.btn-mokka[disabled]:focus, 
fieldset[disabled] .btn-mokka:focus, 
.btn-mokka.disabled:active, 
.btn-mokka[disabled]:active, 
fieldset[disabled] .btn-mokka:active, 
.btn-mokka.disabled.active, 
.btn-mokka[disabled].active, 
fieldset[disabled] .btn-mokka.active { 
  background-color: #B38744; 
  border-color: #856820; 
} 
 
.btn-mokka .badge { 
  color: #B38744; 
  background-color: #ffffff; 
}
.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .lightGallery .image-tile, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm, .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl, .col-xl-auto {
    /* position: relative; */
     width: auto; 
    padding-right: 0;  
    padding-left:0;  
}
.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
    display: inline-block;
    font-weight: 400;
    color: #1F1F1F;
    text-align: center;
    vertical-align: middle;
    user-select: none;
  
    border: 1px solid transparent;
    padding: 0.675rem 0.5rem;
    font-size: 0.875rem;
    line-height: 1;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.row {
    display: block; 
     flex-wrap: wrap; 
     margin-right: -15px; 
   margin-left: 0px;
    
}
a:hover {
    color: #0056b3;
    text-decoration: none;
}
  </style>
  <?php
		include("head_q.php");

  ?>
  <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin transparent">
			  <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                          <a href="<?php echo site_url();?>waiter/waiter/Takeaway" class="btn btn-dblue" role="button">Takeaway 
						  <span style="background-color:#9033FF;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcountaw?></span></a>   

						    <a href="<?php echo site_url();?>waiter/waiter/cash" class="btn btn-dblue" role="button">Cash 
						  <span style="background-color:#9033FF;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcountawc?></span></a> 
						  
                          <a href="<?php echo site_url();?>waiter/waiter/Reserve" class="btn btn-dblue" role="button">Reserve
						   <span style="background-color:#FFA533;color:#fff;padding:0 2px 0 2px;font-size: 10px;">0</span></a>
               
                          <a href="<?php echo site_url();?>waiter/waiter/Deliver" class="btn btn-dblue " role="button"> Deliver
						   <span style="background-color:#1BD50F;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcount?></span></a>
						   
						    <a href="<?php echo site_url();?>waiter/waiter/Waiting_payment" class="btn btn-dblue" role="button"> Waiting  
						  <span style="background-color:green;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcountow?></span></a>
						  
                </div>
                 
              </div>
<br />			  
			  <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                          <a href="<?php echo site_url();?>waiter/waiter/table_order" class="btn btn-dblue active" role="button">
						 Table <span style="background-color:#1BD50F;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcounttb?></span></a>                 
             <a href="<?php echo site_url();?>waiter/waiter/Add_on" class="btn btn-dblue" role="button">
						 Add On <span style="background-color:#1BD50F;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcountadd?></span></a>             
             <a href="<?php echo site_url();?>waiter/waiter/Kitchen" class="btn btn-dblue" role="button">Kitchen
 <span style="background-color:#9033FF;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcountowk?></span></a>
 
                          <a href="<?php echo site_url();?>waiter/waiter/Call" class="btn btn-dblue" role="button"> Call  
						  <span style="background-color:#FFA533;color:#fff;padding:0 2px 0 2px;font-size: 10px;">0</span></a>
						  
						  <a href="<?php echo site_url();?>waiter/waiter/open_order" class="btn btn-dblue" role="button"> Open  
						  <span style="background-color:#FF0000;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcounto?></span></a>
						  
						  <a href="<?php echo site_url();?>waiter/waiter/Ready" class="btn btn-dblue" role="button"> Ready  
						  <span style="background-color:green;color:#fff;padding:0 2px 0 2px;font-size: 10px;"><?=$dcountowkr?></span></a>
						  
                </div>
                 
              </div>		

            </div>
          </div>

<!------ Include the above in your HEAD tag ---------->


  
	
			<div class="row">				
				<div class="col-md-12">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php
		
					foreach($order_list as $r)
					{
						$id=$r['id'];
						$sqlc = "SELECT count(*) as count FROM order_menu where order_id=$id";
						$recordc = $this->db->query($sqlc);
						$ac= $recordc->result_array();
						
						$cust_id=$r['cust_id'];
						$order_status=$r['order_status'];
            $table_id=$r['table_id'];
						$sqlcc = "SELECT * FROM customer where id=$cust_id";
						$recordcc = $this->db->query($sqlcc);
						$acc= $recordcc->result_array();
						$date=date('y-m-d H:i:s');
						$date1=$r['date'].' '.$r['time'];
						$start_date = new DateTime($date);
                        $since_start = $start_date->diff(new DateTime($date1));
                        $day=$since_start->days.' days';
                        $min=$since_start->i.' minutes';


/* 	$addtress_id=$r['addtress_id'];
	if($addtress_id!='')
	{
						$sqlcca = "SELECT * FROM customer_address where id=$addtress_id";
						$recordcca = $this->db->query($sqlcca);
						$acca= $recordcca->result_array();
					} */
					
				
						?>
						<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne_<?=$id?>">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?=$id?>" aria-expanded="true" aria-controls="collapseOne_<?=$id?>">
									 <div>
										  <span style="float:right;color:#111"><?=$r['state']?> <?=$r['comming_from']?> <br/>
										</div>									
									#<?=$r['order_id']?><br />
										<font color="#fff" size="3px"><?=$ac[0]['count']?> Items | ₹<?=$r['total_amount']?> 
										<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIEW CART <i class="fa fa-briefcase" aria-hidden="true"></i>-->
										<br />From : <?=$acc[0]['name']?> <br>
										<font>  
								</a>
								</h4>
							</div>
							<div id="collapseOne_<?=$id?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne_<?=$id?>">
								<div class="panel-body">
								<table class="table">
								<tr>
								<td colspan="2" style="text-align:right">
								<?=$r['payment_method']?> <br /><font color="red"><?=$r['paid_unpaid']?></font>
								</td >
                <td>
                  <?php
                  
                  $sql = "SELECT * FROM tables where id='$table_id'";
                  $record = $this->db->query($sql);
                  $res=$record->result_array();
                  echo " ".$res[0]['name'];
                  
                  ?>
                </td>
								</tr>
								<tr>
								<td style="border-top: 0px solid #CED4DA;border-bottom: 0px solid #CED4DA;">
								#<?=$r['order_id']?>
								</td >
								<td style="border-top: 0px solid #CED4DA;border-bottom: 0px solid #CED4DA;">
								
								<a href="<?php echo site_url();?>waiter/waiter/Order_Accept/<?=$r['id']?>/Takeaway"  class="btn btn-success">Accept</a>
								<a href="<?php echo site_url();?>waiter/waiter/Order_Decline/<?=$r['id']?>/Takeaway"  class="btn btn-danger">Decline</a>
								</td>
								</tr>
								<tr>
									<td width="50%" style="border-top: 0px solid #CED4DA;border-bottom: 0px solid #CED4DA;">
										<?=$ac[0]['count']?> Items 
										</td>
										<td  width="50%" style="border-top: 0px solid #CED4DA;border-bottom: 1px solid #CED4DA;">
										<?php if($day>0)
								echo $day;	
								?> <?=$min?> ago
										</td>
								</table>
								<table class="table">
								<?php
								$sqlm = "SELECT * FROM order_menu where order_id='$id'";
								$recordm = $this->db->query($sqlm);
								$am= $recordm->result_array();
								foreach($am as $m)
								{
									$menu_id=$m['menu_id'];
									$sqlm11 = "SELECT * FROM hotel_menu where IsActive=0 and id='$menu_id'";
									$recordm11 = $this->db->query($sqlm11);
									$am1= $recordm11->result_array();
									?>
									<tr>
								
									<td  width="50%">
										<?php echo $m['qty']. ' × '.$am1[0]['menu'];?>
										</td>
									
									<?php
								
								}
								?>
								
										
								</table>
								</div>
							</div>
						</div>
						</div>
						<?php
					
					}
					?>
						
					</div>
				</div><!--- END COL -->		
			</div><!--- END ROW -->			
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
		.template_faq {
    background: #edf3fe none repeat scroll 0 0;
}
.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
    margin-bottom: 0;
    padding: 0 10px 0 0;
}
#accordion .panel {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 15px 0;
}
#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}
#accordion .panel-title a {
    background: #94d394  none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 10px;
    color: #fff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 20px 12px 10px;
    position: relative;
    transition: all 0.3s ease 0s;
}
#accordion .panel-title a.collapsed {
    background: #57b657  none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #fff;
}


#accordion .panel-body {
    background: #0000000d none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}
#accordion .panel-body p {
    border-left: 1px dashed #8c8c8c;
    padding-left: 25px;
}
		</style>
<script>
/*
Author       : Theme_ocean.
Template Name: Fury - Product Landing Page
Version      : 1.0
*/
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

	}); 	

				
})(jQuery);
</script>
<!--
<script>
    window.setInterval('refresh()', 10000); 	
    // Call a function every 10000 milliseconds 
    // (OR 10 seconds).

    // Refresh or reload page.
    function refresh() {
        window .location.reload();
    }
</script>
-->
        </div>
        </div>        
        </div>        
		