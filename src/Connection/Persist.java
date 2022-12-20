package Connection;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Iterator;

import HandleJson.Tabela;

public class Persist {

    public String filePath;

    public void setFilePath(String filePath) {
        this.filePath = filePath;
    }

    public void execute() {
        try {
            Connection connection = OpenConnection.getInstance().createConnection();

            Statement statement = connection.createStatement();

            GetSQL getsql = new GetSQL();
            ArrayList<String> listSQL = getsql.getSql();
         
            for (Iterator<String> iteratorSQL = listSQL.iterator(); iteratorSQL.hasNext();) {
                String sql = iteratorSQL.next();
                statement.executeUpdate(sql);
            }
            statement.close();

            System.out.println("Dados salvos com sucesso!");

        } catch (SQLException ex) {
            System.out.println("Erro de banco: " + ex);
        } catch (Exception e) {
            System.out.println("Erro: " + e);
        }
    }
}
