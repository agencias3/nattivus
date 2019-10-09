{!! Form::open(['route' => 'work.store', 'class' => 'w-100 d_flex wrap justify-space form column-800 m-top-800-5', 'id' => 'fWork', 'files'=> true]) !!}
    <fieldset>
        <input type="text" id="contact-name" name="name" placeholder="Nome e Sobrenome *" required />
    </fieldset>
    <fieldset>
        <input type="email" id="contact-email" name="email" placeholder="E-mail *" required/>
    </fieldset>
    <fieldset>
        <input class="masked-phone" type="text" name="phone" id="contact-phone" placeholder="Telefone *" required />
    </fieldset>
    <fieldset>
        <input type="text" id="contact-subject" name="subject" placeholder="Assunto" />
    </fieldset>
    <fieldset>
        <input type="text" id="contact-city" name="city" placeholder="Cidade:" />
    </fieldset>
    <fieldset class="file relative">
        <span class="w-100 d_flex relative z-index-1">
            <b class="d_flex flex-1 direction-column self-center">
                Anexo (Currículo)
            </b>
            <figure></figure>
        </span>
        <input class="w-100 h-100 absolute z-index-2 top-0 left-0 opacity-0" type="file" id="contact-file" name="file" />
    </fieldset>
    <fieldset class="w-100">
        <textarea id="contact-message" name="message" placeholder="Escreva a sua mensagem... *" required></textarea>
    </fieldset>
    <fieldset class="w-100 t-align-c">
        <input class="display-inline-block pointer smooth w-600-100" type="submit" id="send-contact" value="Enviar" />
    </fieldset>
    <div class="def-msg w-100 m-top-30 f-size-16 t-align-c"></div>
{!! Form::close() !!}