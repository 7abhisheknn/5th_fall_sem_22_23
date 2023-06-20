import java.rmi.Naming;

public class Server{
    public static void main(String[] args) throws Exception{
        MulC obj= new MulC();
        Naming.rebind("MUL",obj);
        System.out.println("server started");
    }
}