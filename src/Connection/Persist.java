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
	
	public void setFilePath(String filePath){
		 this.filePath = filePath;
	}
	
	
	
	//posso fazer um database singleton
	public void execute() {
		try {
			Connection connection = this.openConnection();

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
	
	
	public Connection openConnection()  {
		
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