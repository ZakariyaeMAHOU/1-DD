const etab='ISTA BERKANE';
class Etudiant {
    constructor(nom, age) {
        this.nom = nom;
        this.age = age
    }
    info() {
        return `Etudiant nom:${this.nom} a pour
age:${this.age}`
    }
}
function info(etudiant){
    return`nom : ${etudiant.nom} age : ${etudiant.age}`
}
export default Etudiant
export {etab,info}