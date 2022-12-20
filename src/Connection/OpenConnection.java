package Connection;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class OpenConnection {

    private static OpenConnection uniqueInstance;
    
    //Singleton
    private OpenConnection() {
        this.createConnection();
    }

    public static synchronized OpenConnection getInstance() {
        if (uniqueInstance == null) {
            uniqueInstance = new OpenConnection();
        }

        return uniqueInstance;
    }

    public Connection createConnection() {
        Connection connection = null;

        try {
            String url = new GetConnection().createConnection()[0];
            String usuario = new GetConnection().createConnection()[1];
            String senha = new GetConnection().createConnection()[2];

            connection = DriverManager.getConnection(url, usuario, "");

        } catch (IOException e) {
            System.out.println("Class Persist, method: openConnection. Error IOException: " + e);

        } catch (SQLException ex) {
            System.out.println("Class Persist, method: openConnection. Error SQLException: " + ex);
        }

        return connection;
    }
}
