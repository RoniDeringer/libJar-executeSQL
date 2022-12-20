package HandleJson;

public class Coluna {

    private String nome;
    private String tipo;
    private boolean isNotNull;
    private boolean isPK;
    private boolean isAI;

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public boolean isNotNull() {
        return isNotNull;
    }


    public boolean isIsNotNull() {
        return isNotNull;
    }

    public void setIsNotNull(boolean isNotNull) {
        this.isNotNull = isNotNull;
    }

    public boolean isIsPK() {
        return isPK;
    }

    public void setIsPK(boolean isPK) {
        this.isPK = isPK;
    }

    public boolean isIsAI() {
        return isAI;
    }

    public void setIsAI(boolean isAI) {
        this.isAI = isAI;
    }

    @Override
    public String toString() {
        StringBuilder builder = new StringBuilder();
        builder.append("\n Coluna [nome=");
        builder.append(nome);
        builder.append(", tipo=");
        builder.append(tipo);
        builder.append(", isNotNull=");
        builder.append(isNotNull);
        builder.append(", isPK=");
        builder.append(isPK);
        builder.append(", isAI=");
        builder.append(isAI);
        builder.append("]");
        return builder.toString();
    }

}
