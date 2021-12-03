import React from "react";
import { useForm } from "react-hook-form";


export default function Register() {
    const { register, handleSubmit } = useForm();
    const onSubmit = data => console.log(data);

    return (
        <form onSubmit={handleSubmit(onSubmit)}>
            <h1>Prénom:</h1>
            <input {...register("usr_firstname", { required: true, maxLength: 20 })} />
            <h1>Nom:</h1>
            <input {...register("usr_lastname", { pattern: /^[A-Za-z]+$/i })} />
            <h1>Mail:</h1>
            <input {...register("usr_mail")} />
            <h1>Téléphone:</h1>
            <input type="number" {...register("usr_phone" )}/>
            <h1>Password:</h1>
            <input type="password" {...register("usr_password", { required: true })} />
            <input type="submit" />
        </form>
    );
}