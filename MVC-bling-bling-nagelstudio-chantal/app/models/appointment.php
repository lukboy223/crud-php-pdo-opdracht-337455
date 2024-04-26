<?php

class Appointment
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getAppointment()
    {
        $sql = "SELECT Id
                      ,Kleur1
                      ,Kleur2
                      ,Kleur3
                      ,Kleur4
                      ,Tel
                      ,Email
                      ,Datum
                      ,Soort1
                      ,Soort2
                      ,Soort3
                FROM  afspraak";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
    public function createAppointment($post)
    {
        $sql = "INSERT INTO afspraak
                                    (
                                    Kleur1,
                                    Kleur2,
                                    Kleur3,
                                    Kleur4,
                                    Tel,
                                    Email,
                                    Datum,
                                    Soort1,
                                    Soort2,
                                    Soort3
                                    )
                VALUES              (
                        :Kleur1,
                                        :Kleur2,
                                        :Kleur3,
                                        :Kleur4,
                                    :Tel,
                                    :Email,
                                    :Datum,
                                    :Soort1,
                                    :Soort2,
                                    :Soort3
                                    )";

        $this->db->query($sql);
        $this->db->bind(':Kleur1', strval($post['Kleur1']), PDO::PARAM_STR);
        $this->db->bind(':Kleur2', strval($post['Kleur2']), PDO::PARAM_STR);
        $this->db->bind(':Kleur3', strval($post['Kleur3']), PDO::PARAM_STR);
        $this->db->bind(':Kleur4', strval($post['Kleur4']), PDO::PARAM_STR);
        echo $post['Kleur3'];
        var_dump($post);
        $this->db->bind(':Tel', $post['Tel'], PDO::PARAM_INT);
        $this->db->bind(':Email', $post['Email'], PDO::PARAM_STR);
        $this->db->bind(':Datum', $post['Datum'], PDO::PARAM_STR);
        if (array_key_exists('Soort1', $post)) {
            $this->db->bind(':Soort1', $post['Soort1'], PDO::PARAM_STR);
        } else {

            $this->db->bind(':Soort1', 'false', PDO::PARAM_STR);
        }
        if (array_key_exists('Soort2', $post)) {
            $this->db->bind(':Soort2', $post['Soort2'], PDO::PARAM_STR);
        } else {

            $this->db->bind(':Soort2', "false", PDO::PARAM_STR);
        }
        if (array_key_exists('Soort3', $post)) {

            $this->db->bind(':Soort3', $post['Soort3'], PDO::PARAM_STR);
        } else {

            $this->db->bind(':Soort3', 'false', PDO::PARAM_STR);
        }
        $this->db->execute();
    }
}
