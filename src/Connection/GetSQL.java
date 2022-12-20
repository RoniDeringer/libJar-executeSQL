package Connection;

import HandleJson.ChoiceDatabase;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Iterator;

import HandleJson.Coluna;
import HandleJson.Database;
import HandleJson.Tabela;

public class GetSQL {

    public ArrayList<String> listSQL;

    public ArrayList<String> getSql() {
        ArrayList<String> listSQL = new ArrayList<String>();

        try {
            Database database = new ChoiceDatabase().ChoiceDatabase();
            ArrayList<Tabela> listTabela = database.getTabela();

            //Adicionar as tabelas no sql
            for (Iterator<Tabela> iteratorTabela = listTabela.iterator(); iteratorTabela.hasNext();) {
                Tabela tabela = iteratorTabela.next();
                String sql = "";
                sql += "create table " + tabela.getNome();
                String sqlColuna = "";

                // Adicionar as colunas no sql
                int contColuna = 0;

                ArrayList<Coluna> listColuna = tabela.getColuna();
                for (Iterator<Coluna> iteratorColuna = listColuna.iterator(); iteratorColuna.hasNext();) {
                    Coluna coluna = iteratorColuna.next();

                    if (contColuna != 0) {
                        sqlColuna += ", ";
                    }
                    sqlColuna += "" + coluna.getNome() + " " + coluna.getTipo();

                    if(coluna.isIsPK()== true){
                        sqlColuna +=" PRIMARY KEY";
                    }
                    
                    if(coluna.isIsNotNull()== true){
                        sqlColuna +=" NOT NULL";
                    }
                    
                    if(coluna.isIsAI()== true){
                        sqlColuna +=" AUTO_INCREMENT";
                    }
                    
                    contColuna++;
                } // endFor Coluna
                sql += " (" + sqlColuna + "); ";
                listSQL.add(sql);

            } // endFor Tabela
        } catch (IOException e) {
            System.out.println("class GetSQL, method getSql. Error: " + e);
        }

        return listSQL;
    }
}
