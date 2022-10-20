import SignPDF from "./SignPDF";
import fs from "node:fs";
import path from "node:path";

async function main() {
  const originalPdfName = "Array";       //VEM DO FRONT
  const certificateName = "keystore";    //VEM DO FRONT

  const pdfBuffer = new SignPDF(
    path.resolve('./tcc/pdf/' + originalPdfName),
    path.resolve('assets/' + certificateName + '.p12')
  );

  const signedDocs = await pdfBuffer.signPDF();
  const pdfName = `./exports/pdfAssinado.pdf`;
  // const randomNumber = Math.floor(Math.random() * 5000);
  // const pdfName = `./exports/pdfassinadoNum${randomNumber}.pdf`;

  fs.writeFileSync(pdfName, signedDocs);
  console.log(`New Signed PDF created called: ${pdfName}`);
}

main();
