/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package central;

import java.util.Properties;
import javax.mail.Folder;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.NoSuchProviderException;
import javax.mail.Session;
import javax.mail.Store;

/**
 *
 * @author daw2
 */
public class LeerEmail {

    public static void LeerCorreos() {
        Properties props = System.getProperties();
        props.setProperty("mail.store.protocol", "imaps");
        try {
            Session session = Session.getDefaultInstance(props, null);
            Store store = session.getStore("imaps");
            store.connect("outlook.office365.com", "msb.iescamas@outlook.com", "Msb.93345900");
            Folder[] folders = store.getDefaultFolder().list("*");
            for (Folder folder : folders) {
                if (folder.getType() == 3) {
                    System.out.println(folder.getFullName() + ": " + folder.getMessageCount());

                    folder = store.getFolder(folder.getFullName());
                    folder.open(Folder.READ_ONLY);

                    Message[] mensajes = folder.getMessages();

                    for (int i = 0; i < mensajes.length; i++) {
                        System.out.println("DE    : " + mensajes[i].getFrom()[0].toString());
                        System.out.println("ASUNTO: " + mensajes[i].getSubject());
                    }
                }
            }
        } catch (MessagingException e) {
            e.printStackTrace();
        }
    }
    
    public static Message[] LeerCorreos1() {
        Message[] mensajes = null;
        Properties props = System.getProperties();
        props.setProperty("mail.store.protocol", "imaps");
        try {
            Session session = Session.getDefaultInstance(props, null);
            Store store = session.getStore("imaps");
            store.connect("outlook.office365.com", "msb.iescamas@outlook.com", "Msb.93345900");
            Folder[] folders = store.getDefaultFolder().list("*");
            for (Folder folder : folders) {
                if (folder.getType() == 3) {
                    System.out.println(folder.getFullName() + ": " + folder.getMessageCount());

                    folder = store.getFolder(folder.getFullName());
                    folder.open(Folder.READ_ONLY);

                     mensajes = folder.getMessages();

                    for (int i = 0; i < mensajes.length; i++) {
                        System.out.println("DE    : " + mensajes[i].getFrom()[0].toString());
                        System.out.println("ASUNTO: " + mensajes[i].getSubject());
                    }
                }
            }
        } catch (MessagingException e) {
            e.printStackTrace();
        }
        return mensajes;
    }

    public static void leerCorreo() {
        Properties prop = new Properties();

        // Deshabilitamos TLS
        prop.setProperty("mail.pop3.starttls.enable", "false");

        // Hay que usar SSL
        prop.setProperty("mail.pop3.socketFactory.class", "javax.net.ssl.SSLSocketFactory");
        prop.setProperty("mail.pop3.socketFactory.fallback", "false");

        // Puerto 995 para conectarse.
        prop.setProperty("mail.pop3.port", "995");
        prop.setProperty("mail.pop3.socketFactory.port", "995");

        Session sesion = Session.getInstance(prop);
        sesion.setDebug(false);

        Store store;
        Folder folder;
        try {
            store = sesion.getStore("pop3");
            store.connect("outlook.office365.com", "msb.iescamas@outlook.com", "Msb.93345900");

            folder = store.getFolder("INBOX");
            folder.open(Folder.READ_ONLY);

            Message[] mensajes = folder.getMessages();

            for (int i = 0; i < mensajes.length; i++) {
                System.out.println("DE    : " + mensajes[i].getFrom()[0].toString());
                System.out.println("ASUNTO: " + mensajes[i].getSubject());
            }
        } catch (NoSuchProviderException e) {
            e.printStackTrace();
        } catch (MessagingException e) {
            e.printStackTrace();
        }
    }
    
    public static void main(String[] args) {
        LeerCorreos1();
    }
}
