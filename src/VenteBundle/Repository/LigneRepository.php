<?php

namespace VenteBundle\Repository;
use VenteBundle\Entity\Commande;

/**
 * LigneRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LigneRepository extends \Doctrine\ORM\EntityRepository
{
    public function produitExiste($id)
    {
        $req=$this->getEntityManager()->createQuery("select l from VenteBundle:Ligne l where l.Produit=:id")->setParameter('id',$id);
        return $req->getOneOrNullResult();
    }

    public function fetchLigne($id)
    {
        $req=$this->getEntityManager()->createQuery("select l from VenteBundle:Ligne l where l.idClient=:id")->setParameter('id',$id);
        return $req->getResult();
    }

    public function totalpanier($id)
    {
        $req=$this->getEntityManager()->createQuery("select SUM(l.prix*l.quantite) as total from VenteBundle:Ligne l where l.idClient=:id")->setParameter('id',$id);
        return $req->getResult();
    }

    public function passerCommander($id)
    {
        $req=$this->getEntityManager()->createQuery("select CONCAT(l.quantite,'*',p.libelle) as description FROM VenteBundle:Ligne l,VenteBundle:Produit p  where l.idClient=:id and p.id=l.Produit")
            ->setParameter('id',$id);
        return $req->getResult();
    }

    public function supprimerPanier($id)
    {
        $req=$this->getEntityManager()->createQuery("delete FROM VenteBundle:Ligne l where l.idClient=:id")
            ->setParameter('id',$id);
        return $req->getResult();
    }



}