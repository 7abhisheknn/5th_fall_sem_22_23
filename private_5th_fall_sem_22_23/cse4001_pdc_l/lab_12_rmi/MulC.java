import java.rmi.RemoteException;
import java.rmi.server.UnicastRemoteObject;

public class MulC extends UnicastRemoteObject implements MulI{
    protected MulC() throws RemoteException{
        super();
    }
    public int mul(int x, int y) throws Exception{
        return x*y;
    }
}