

 function dict_create (id_student, first_name_student, second_name_student, iam_student, class_student, tuteur_student, id_class, name_class, house_id_class, id_houses, name_houses, id_tuteur, first_name_tuteur, second_name_tuteur, id_student_entreprise, plage_1_entreprise, plage_2_entreprise, plage_3_entreprise, plage_4_entreprise, plage_5_entreprise, plage_6_entreprise, plage_7_entreprise, plage_8_entreprise, plage_1, plage_2, plage_3, plage_4, plage_5, plage_6, plage_7, plage_8, entreprises) {



const combined = [plage_1_entreprise, plage_2_entreprise, plage_3_entreprise, plage_4_entreprise, plage_5_entreprise, plage_6_entreprise, plage_7_entreprise, plage_8_entreprise];

var student_dict = [];

    // arr = {
    //     id,
    //     first name
    //     second name
    //     class
    //     house
    //     tuteur
    //     entreprise 1 .. 8
    //     plage 1 .. 8
    //     salle
    // };
// console.log(id_student);
    id_student.forEach(student_id => {
        student_id = student_id - 1;
        
        let obj = {
        id: student_id,
        
        first_name: first_name_student[student_id],
        second_name: second_name_student[student_id],

        class_id: class_student[student_id],
        class_name: name_class[class_student[student_id]-1],

        house_id: house_id_class[class_student[student_id]],
        house_name: name_houses[house_id_class[class_student[student_id]-1]-1],

        tuteur_id: tuteur_student[student_id],
        tuteur_first_name: first_name_tuteur[tuteur_student[student_id]-1],
        tuteur_second_name: second_name_tuteur[tuteur_student[student_id]-1],

        entreprise_1: plage_1_entreprise[student_id],
        entreprise_1_name: entreprises[plage_1_entreprise[student_id]-1],
        entreprise_1_plage: plage_1[student_id],

        entreprise_2: plage_2_entreprise[student_id],
        entreprise_2_name: entreprises[plage_2_entreprise[student_id]-1],
        entreprise_2_plage: plage_2[student_id],

        entreprise_3: plage_3_entreprise[student_id],
        entreprise_3_name: entreprises[plage_3_entreprise[student_id]-1],
        entreprise_3_plage: plage_3[student_id],

        entreprise_4: plage_4_entreprise[student_id],
        entreprise_4_name: entreprises[plage_4_entreprise[student_id]-1],
        entreprise_4_plage: plage_4[student_id],

        entreprise_5: plage_5_entreprise[student_id],
        entreprise_5_name: entreprises[plage_5_entreprise[student_id]-1],
        entreprise_5_plage: plage_5[student_id],

        entreprise_6: plage_6_entreprise[student_id],
        entreprise_6_name: entreprises[plage_6_entreprise[student_id]-1],
        entreprise_6_plage: plage_6[student_id],

    };
        student_dict.push(obj); 
        // console.log(obj);
        
    });
return student_dict;
 }
