import React from "react";
import { useForm } from "react-hook-form";


export default function Login() {
    const { register, handleSubmit } = useForm();
    const onSubmit = data => console.log(data);

    return (
        <form onSubmit={handleSubmit(onSubmit)}>
            <p>Mail:</p>
            <input {...register("usr_mail")} />
            <p>Password:</p>
            <input type="password" {...register("usr_password", { required: true })} />
            <input type="submit" />
        </form>
    );
}