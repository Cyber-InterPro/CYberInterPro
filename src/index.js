import SignPDF from "./SignPDF";
import fs from "node:fs";
import path from "node:path";

async function main() {
  const originalPdfName = "vazio";       //VEM DO FRONT
  const certificateName = "keystore";    //VEM DO FRONT

  const pdfBuffer = new SignPDF(
    path.resolve('assets/' + originalPdfName + '.pdf'),
    path.resolve('assets/' + certificateName + '.p12')
  );

  const signedDocs = await pdfBuffer.signPDF();
  const randomNumber = Math.floor(Math.random() * 5000);
  const pdfName = `./exports/pdfassinadoNum${randomNumber}.pdf`;

  fs.writeFileSync(pdfName, signedDocs);
  console.log(`New Signed PDF created called: ${pdfName}`);
}

main();
