package Gerenciador;

import Connection.Persist;

public class App {
	public int soma(int a, int b) {
		return a + b;
	}

	public void executar(String filePath) {
		//D:\\Users\\Roni\\3D Objects\\libJar-executeSQL\\generated_json_2022-10-19 02_45_28.json
		
		Persist p = new Persist();
		p.execute();
	}

}
