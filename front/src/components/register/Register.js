import React from "react";
import { useForm } from "react-hook-form";


export default function Register() {
    const { register, handleSubmit } = useForm();
    const onSubmit = data => console.log(data);

    return (
        <form onSubmit={handleSubmit(onSubmit)}>
            <p>Prénom:</p>
            <input {...register("usr_firstname", { required: true, maxLength: 20 })} />
            <p>Nom:</p>
            <input {...register("usr_lastname", { pattern: /^[A-Za-z]+$/i })} />
            <p>Mail:</p>
            <input {...register("usr_mail")} />
            <p>Téléphone:</p>
            <input type="number" {...register("usr_phone" )}/>
            <p>Password:</p>
            <input type="password" {...register("usr_password", { required: true })} />
            <input type="submit" />
        </form>
    );
}