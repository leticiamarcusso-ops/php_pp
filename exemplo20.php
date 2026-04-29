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

// Classe que usa a interface
class SistemaNotificacao {
   private $notificador;

    public function __construct(INotificador $notificador)
    {
         $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem)
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }

}

$sistemaEmail = new SistemaNotificacao(new NotificadorEmail());
$sistemaSMS = new SistemaNotificacao(new NotificadorSMS());
$sistemaWhatsApp = new SistemaNotificacao(new NotificadorWhatsApp());

$sistemaEmail->notificarUsuario("joao@email.com", "Seu Pedido foi confirmado!");
$sistemaSMS->notificarUsuario("17997651234", "Seu Pedido foi confirmado!");
$sistemaWhatsApp->notificarUsuario("17997651234", "Seu Pedido foi confirmado!");





