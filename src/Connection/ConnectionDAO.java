package Connection;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

import javax.swing.JOptionPane;

public class ConnectionDAO {
//https://www.devmedia.com.br/criando-uma-conexao-java-mysql-server/16753

	public Connection connectionSQL() {
		Connection conn = null;

		try {
			// "jbdc:mysql://localhost:3306/nomeBanco?user=root&password=SENHA"

			String url = "jbdc:mysql://localhost:3306/nomeBanco?user=root&password=";

			conn = DriverManager.getConnection(url);

		} catch (SQLException e) {
		
//			JOptionPane.showMeessageDialog(null, erro.getMessage());

		}
		return conn;

	}

}
