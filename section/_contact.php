<div id="contact" class="contact">
    <div class="contact__content">

        <div class="contact__info">
            <p><span class="agency-name">ANTIQLOG.</span></p>
            <p>First in Furniture</p>
            <p><?php print_r($_contact_section->address); ?></p>
            <p><?php print_r($_contact_section->postal_code); ?> - <?php print_r($_contact_section->address_city); ?></p>

            <p class="agency-location mrgTop"><a href="https://www.google.com/search?q=martagonzalez.dev&rlz=1C5CHFA_enES958ES958&sxsrf=APq-WBsESl3sdFaXpHL8nq0JO37eRsGLEg:1645030039560&ei=ZioNYunVBo2R9u8Pi4-D-A0&ved=2ahUKEwi85Zu51oT2AhU9_7sIHbOLA0gQvS56BAgWEHE&uact=5&oq=martagonzalez.dev&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBAgjECdKBAhBGABKBAhGGABQAFgAYNwBaABwAHgAgAFfiAFfkgEBMZgBAKABAcABAQ&sclient=gws-wiz&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=3259382419080424365&lqi=ChFtYXJ0YWdvbnphbGV6LmRldloTIhFtYXJ0YWdvbnphbGV6IGRldnoIVGVycmFzc2GSARB3ZWJzaXRlX2Rlc2lnbmVyqgELEAEqByIDZGV2KA4&rlst=f#rlfi=hd:;si:3259382419080424365,l,ChFtYXJ0YWdvbnphbGV6LmRldloTIhFtYXJ0YWdvbnphbGV6IGRldnoIVGVycmFzc2GSARB3ZWJzaXRlX2Rlc2lnbmVyqgELEAEqByIDZGV2KA4;mv:[[43.845856,3.3678643],[36.7953164,-6.3742204]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" title="Ver en google maps" target="_blank"><i class="icon icon-location"></i> Ver en google maps</a></p>
            <p class="agency-phone"><a href="tel:<?php print_r($_contact_section->phone); ?>" title="<?php print_r($_contact_section->phone); ?>"><i class="icon icon-phone"></i><?php print_r($_contact_section->phone); ?></a></p>
            <p class="agency-email"><a href="mailto:<?php print_r($_contact_section->email); ?>" title="<?php print_r($_contact_section->email); ?>"><i class="icon icon-email"></i><?php print_r($_contact_section->email); ?></a></p>
        </div>

        <div class="contact__form">

            <p><?php print_r($_contact_section->form_text); ?></p>

            <form id="contactForm" class="mrgTop" action="#" method="GET" onsubmit="event.preventDefault(); validar(this)">

                <div class="form-group">
                    <label class="form-label" for="name">Nombre</label>
                    <input class="form-control" type="text" name="name" value="" maxlength="20" autofocus/>
                </div>
                
                <div class="form-group">
                 <label class="form-label" for="name">Apellidos</label>
                    <input class="form-control" type="text" id="lastname" name="lastname" value="" maxlength="20" />
                </div>

                <div class="form-group">
                    <label class="form-label" for="name">Teléfono</label>
                    <input class="form-control" type="phone" id="phone" name="phone" value="" maxlength="9" pattern="[0-9]{9}"/>
                </div>

                <div class="form-group">
                    <label class="form-label" for="name">Email</label>
                    <input class="form-control" type="email" id="email" name="email" value="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"/>
                </div>

                <div class="form-group">
                    <label class="form-label" for="name">Comentarios</label>
                    <textarea class="form-control" id="comments" name="comments" rows="6" ></textarea>
                </div>

                <div class="form-group last-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="legal" >
                        <label class="form-check-label" for="legal">He leído y acepto el <a href
                        ="#">aviso legal</a></label>
                    </div>
                    <div id="msgBox" class="msg__box"></div>
                    <button type="submit" class="btn btn--large">ENVIAR</button>
                </div>               

            </form>
        </div>
    </div>
</div>