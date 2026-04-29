<?php
interface INotificador {
    public function enviar($destinatario, $mensagem);
}

// implementar: e-mail
class NotificadorEmail implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. {$mensagem}.";
    }
}

// implementar: SMS
class NotificadorSMS implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }

}

// implementar: WhatsApp
class NotificadorWhatsApp implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "WhatsApp enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}